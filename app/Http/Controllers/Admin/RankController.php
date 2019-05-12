<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Level;
use App\Helpers\SlackNotify;
use App\Http\Controllers\Controller as Controller;
use App\Models\ScheduleModel;
use Illuminate\Http\Request;
use App\Models\EnrollModel;

class RankController extends Controller
{
    public function rank(Request $request)
    {
        $this->processOverGame($request->scheduleId);

//        app(SlackNotify::class)->setMsg(ScheduleModel::find($request->scheduleId)->order . " 比賽結束")->notify();

        return back()->with(['info' => '排名成功']);
    }


    private function processOverGame($scheduleId)
    {
        $gameInfo = ScheduleModel::find($scheduleId);
        $level = $gameInfo->level;
        $gender = $gameInfo->gender;
        $group = $gameInfo->group;
        $item = $gameInfo->item;

        app(EnrollModel::class)->cleanRankAndIntegral($scheduleId);

        if ($level == '選手組') {
            $this->processRank($level, $gender, $group, $item);
        } else {
            $this->processRank($level, $gender, $group, $item, $city = '臺北市');
            $this->processRank($level, $gender, $group, $item, $city = '外縣市');
        }

        $this->processIntegral($level, $gender, $group, $item);
    }


    public function processRank($level, $gender, $group, $item, $city = null)
    {
        $results = app(EnrollModel::class)->getResults($level, $gender, $group, $item, $city);

        foreach ($results as $key => $result) {
            if ($key <> 0) {
                if ($results[$key - 1]->final_result == $results[$key]->final_result) { //同成績處理 start
                    $前一個選手的名次 = EnrollModel::where('id', $results[$key - 1]->id)->first()->rank; // todo 這裡的命名要改
                    EnrollModel::where('id', $result->id)->update(['rank' => $前一個選手的名次]);
                } else {
                    EnrollModel::where('id', $result->id)->update(['rank' => $key + 1]);
                }
            } else {
                EnrollModel::where('id', $result->id)->update(['rank' => $key + 1]);
            }
        }
    }

    public function processIntegral($level, $gender, $group, $item)
    {
        $enrolls = EnrollModel::select('enroll.id', 'final_result')
            ->leftJoin('player', 'player.id', 'enroll.player_id')
            ->where('game_id', config('app.game_id'))
            ->where('level', $level)
            ->where('gender', $gender)
            ->where('group', $group)
            ->where('item', $item)
            ->whereNotNull('rank')
            ->limit(6)
            ->orderBy(\DB::raw('final_result * 1'))
            ->get();

        $integrals = $this->getIntegrals($level);

        $count = 0;

        foreach ($enrolls as $key => $enroll) {
            //同成績處理 start
            if ($key <> 0 ) {
                if ($enrolls[$key - 1]->final_result == $enrolls[$key]->final_result) {
                    $count++; // todo 這裡寫法可優化
                }
            }
            //同成績處理 end

            $integral = $integrals[$count];

            if ($item == '前進單足S型') {
                $integral++;
            }

            EnrollModel::where('id', $enroll->id)->update(['integral' => $integral]);
            $count++;
        }
    }

    private function getIntegrals($level)
    {
        switch ($level) {
            case Level::Primary:
                return [7, 5, 4, 3, 2, 1];
            case Level::Novice:
                return [8, 6, 5, 4, 3, 2];
            case Level::Contestant:
                return [9, 7, 6, 5, 4, 3];
        }
    }

}
