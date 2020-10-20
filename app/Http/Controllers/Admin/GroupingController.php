<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;
use App\Models\AccountModel;
use App\Models\EnrollModel;
use App\Models\PlayerModel;
use App\Models\ScheduleModel;
use Illuminate\Http\Request;
use App\Services\GroupingService;

class GroupingController extends Controller
{
    public function grouping()
    {
        ScheduleModel::where('game_id', config('app.game_id'))->delete();

        $this->setGrouping('','幼童組','男','初級指定套路','','','1','300');
        $this->setGrouping('','幼童組','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小一年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小一年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小二年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小二年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小三年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小三年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小四年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小四年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小五年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小五年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小六年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小六年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國中','男','初級指定套路','','','1','300');
        $this->setGrouping('','國中','女','初級指定套路','','','1','300');
        $this->setGrouping('','高中','男','初級指定套路','','','1','300');
        $this->setGrouping('','高中','女','初級指定套路','','','1','300');
        $this->setGrouping('','大專','男','初級指定套路','','','1','300');
        $this->setGrouping('','大專','女','初級指定套路','','','1','300');
        $this->setGrouping('','社會','男','初級指定套路','','','1','300');
        $this->setGrouping('','社會','女','初級指定套路','','','1','300');
        $this->setGrouping('','幼童組','男','中級指定套路','','','1','300');
        $this->setGrouping('','幼童組','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小一年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小一年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小二年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小二年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小三年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小三年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小四年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小四年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小五年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小五年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小六年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小六年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國中','男','中級指定套路','','','1','300');
        $this->setGrouping('','國中','女','中級指定套路','','','1','300');
        $this->setGrouping('','高中','男','中級指定套路','','','1','300');
        $this->setGrouping('','高中','女','中級指定套路','','','1','300');
        $this->setGrouping('','大專','男','中級指定套路','','','1','300');
        $this->setGrouping('','大專','女','中級指定套路','','','1','300');
        $this->setGrouping('','社會','男','中級指定套路','','','1','300');
        $this->setGrouping('','社會','女','中級指定套路','','','1','300');
        $this->setGrouping('初級組','幼童組','男','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','幼童組','女','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小一年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小一年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小二年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小二年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小三年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小三年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小四年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小四年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小五年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小五年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小六年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('初級組','國小六年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','幼童組','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','幼童組','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小一年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小一年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小二年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小二年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小三年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小三年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小四年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小四年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小五年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小五年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小六年級','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國小六年級','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國中','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','國中','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','高中','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','高中','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','大專','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','大專','女','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','社會','男','前進雙足S形','','','2','60');
        $this->setGrouping('新人組','社會','女','前進雙足S形','','','2','60');
        $this->setGrouping('選手組','幼童組','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','幼童組','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小一年級','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小一年級','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小二年級','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小二年級','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小三年級','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小三年級','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小四年級','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小四年級','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小五年級','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小五年級','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小六年級','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國小六年級','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國中','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','國中','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','高中','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','高中','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','大專','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','大專','女','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','社會','男','前進雙足S形','','','2','45');
        $this->setGrouping('選手組','社會','女','前進雙足S形','','','2','45');
        $this->setGrouping('新人組','幼童組','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','幼童組','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小一年級','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小一年級','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小二年級','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小二年級','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小三年級','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小三年級','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小四年級','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小四年級','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小五年級','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小五年級','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小六年級','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國小六年級','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國中','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','國中','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','高中','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','高中','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','大專','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','大專','女','前進交叉形','','','2','60');
        $this->setGrouping('新人組','社會','男','前進交叉形','','','2','60');
        $this->setGrouping('新人組','社會','女','前進交叉形','','','2','60');
        $this->setGrouping('選手組','幼童組','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','幼童組','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小一年級','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小一年級','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小二年級','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小二年級','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小三年級','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小三年級','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小四年級','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小四年級','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小五年級','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小五年級','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小六年級','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國小六年級','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國中','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','國中','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','高中','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','高中','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','大專','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','大專','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','社會','男','前進交叉形','','','2','45');
        $this->setGrouping('選手組','社會','女','前進交叉形','','','2','45');
        $this->setGrouping('選手組','幼童組','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','幼童組','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小一年級','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小一年級','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小二年級','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小二年級','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小三年級','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小三年級','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小四年級','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小四年級','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小五年級','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小五年級','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小六年級','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國小六年級','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國中','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','國中','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','高中','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','高中','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','大專','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','大專','女','前進單足S形','','','2','45');
        $this->setGrouping('選手組','社會','男','前進單足S形','','','2','45');
        $this->setGrouping('選手組','社會','女','前進單足S形','','','2','45');
        return back()->with(['info' => '場次編組成功']);
    }

    private function setGrouping($level,$group, $gender, $item, $gameType, $remark, $gameDay, $estimate)
    {
        $numberOfPlayer = app(EnrollModel::class)->countGameItemNumberOfPlayer($group, $gender, $item, $gameType);

        if ($numberOfPlayer) {
            ScheduleModel::create([
                'game_id'          => config('app.game_id'),
                'order'            => '場次' . (ScheduleModel::where('game_id', config('app.game_id'))->count() + 1),
                'level'            => $level,
                'group'            => $group,
                'gender'           => $gender,
                'item'             => $item,
                'game_type'        => $gameType,
                'remark'           => $remark,
                'number_of_player' => $numberOfPlayer,
                'game_day'         => $gameDay,
                'estimate'         => $estimate,
            ]);
        }
    }

    /**
     * 重新產生選手編號（使用後號碼會被洗牌，危險危險）
     */
    public function createPlayerNumber()
    {
        $playerIds = RegistryFeeModel::select('player_id')->where('game_id', config('app.game_id'))->get();

        foreach ($playerIds as $key => $playerId) {
            EnrollModel::where('game_id', config('app.game_id'))->where('playerSn', $playerId->id)->update(['player_number' => $key + 1]);
        }
    }
}
