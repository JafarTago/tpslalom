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

        if (config('app.game_id') == 9) {
            $this->中正盃109();
        }

        if (config('app.game_id') == 10) {
            $this->市民盃109();
        }

        return back()->with(['info' => '場次編組成功']);
    }

    private function 中正盃109()
    {
        $this->setGrouping('初級組','幼童','男','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','幼童','女','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小一年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小一年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小二年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小二年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小三年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小三年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小四年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小四年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小五年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小五年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小六年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('初級組','國小六年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('','幼童','男','初級指定套路','','','1','300');
        $this->setGrouping('','幼童','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小低年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小低年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小中年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小中年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國小高年級','男','初級指定套路','','','1','300');
        $this->setGrouping('','國小高年級','女','初級指定套路','','','1','300');
        $this->setGrouping('','國中','男','初級指定套路','','','1','300');
        $this->setGrouping('','國中','女','初級指定套路','','','1','300');
        $this->setGrouping('','高中','男','初級指定套路','','','1','300');
        $this->setGrouping('','高中','女','初級指定套路','','','1','300');
        $this->setGrouping('','大專','男','初級指定套路','','','1','300');
        $this->setGrouping('','大專','女','初級指定套路','','','1','300');
        $this->setGrouping('','社會','男','初級指定套路','','','1','300');
        $this->setGrouping('','社會','女','初級指定套路','','','1','300');
        $this->setGrouping('','幼童','男','中級指定套路','','','1','300');
        $this->setGrouping('','幼童','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小低年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小低年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小中年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小中年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國小高年級','男','中級指定套路','','','1','300');
        $this->setGrouping('','國小高年級','女','中級指定套路','','','1','300');
        $this->setGrouping('','國中','男','中級指定套路','','','1','300');
        $this->setGrouping('','國中','女','中級指定套路','','','1','300');
        $this->setGrouping('','高中','男','中級指定套路','','','1','300');
        $this->setGrouping('','高中','女','中級指定套路','','','1','300');
        $this->setGrouping('','大專','男','中級指定套路','','','1','300');
        $this->setGrouping('','大專','女','中級指定套路','','','1','300');
        $this->setGrouping('','社會','男','中級指定套路','','','1','300');
        $this->setGrouping('','社會','女','中級指定套路','','','1','300');
        $this->setGrouping('新人組','幼童','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','幼童','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小一年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小一年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小二年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小二年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小三年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小三年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小四年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小四年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小五年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小五年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小六年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國小六年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國中','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','國中','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','高中','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','高中','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','大專','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','大專','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','社會','男','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','社會','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','幼童','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','幼童','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小一年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小一年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小二年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小二年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小三年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小三年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小四年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小四年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小五年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小五年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小六年級','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國小六年級','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國中','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','國中','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','高中','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','高中','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','大專','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','大專','女','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','社會','男','前進雙足S形','','','1','60');
        $this->setGrouping('選手組','社會','女','前進雙足S形','','','1','60');
        $this->setGrouping('新人組','幼童','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','幼童','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小一年級','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小一年級','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小二年級','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小二年級','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小三年級','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小三年級','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小四年級','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小四年級','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小五年級','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小五年級','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小六年級','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國小六年級','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國中','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','國中','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','高中','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','高中','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','大專','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','大專','女','前進交叉形','','','1','60');
        $this->setGrouping('新人組','社會','男','前進交叉形','','','1','60');
        $this->setGrouping('新人組','社會','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','幼童','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','幼童','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小一年級','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小一年級','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小二年級','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小二年級','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小三年級','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小三年級','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小四年級','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小四年級','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小五年級','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小五年級','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小六年級','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國小六年級','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國中','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','國中','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','高中','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','高中','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','大專','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','大專','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','社會','男','前進交叉形','','','1','60');
        $this->setGrouping('選手組','社會','女','前進交叉形','','','1','60');
        $this->setGrouping('選手組','幼童','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','幼童','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小一年級','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小一年級','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小二年級','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小二年級','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小三年級','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小三年級','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小四年級','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小四年級','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小五年級','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小五年級','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小六年級','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國小六年級','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國中','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','國中','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','高中','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','高中','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','大專','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','大專','女','前進單足S形','','','1','60');
        $this->setGrouping('選手組','社會','男','前進單足S形','','','1','60');
        $this->setGrouping('選手組','社會','女','前進單足S形','','','1','60');
    }

    private function 市民盃109()
    {

        $this->setGrouping('初級組', '幼童', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '幼童', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小一年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小一年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小二年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小二年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小三年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小三年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小四年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小四年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小五年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小五年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小六年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('初級組', '國小六年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '幼童', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '幼童', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小一年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小一年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小二年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小二年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小三年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小三年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小四年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小四年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小五年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小五年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小六年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小六年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國中', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '國中', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '高中', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '高中', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '大專', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '大專', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '社會', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '社會', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('選手組', '幼童', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '幼童', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小一年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小一年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小二年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小二年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小三年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小三年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小四年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小四年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小五年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小五年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小六年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國小六年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國中', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '國中', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '高中', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '高中', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '大專', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '大專', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '社會', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('選手組', '社會', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '幼童', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '幼童', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小一年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小一年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小二年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小二年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小三年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小三年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小四年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小四年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小五年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小五年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小六年級', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小六年級', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國中', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國中', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '高中', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '高中', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '大專', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '大專', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '社會', '男', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '社會', '女', '前進雙足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '幼童', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '幼童', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小一年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小一年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小二年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小二年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小三年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小三年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小四年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小四年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小五年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小五年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小六年級', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小六年級', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國中', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國中', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '高中', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '高中', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '大專', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '大專', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '社會', '男', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '社會', '女', '前進交叉形', '', '', '1', '60');
        $this->setGrouping('菁英組', '幼童', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '幼童', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小一年級', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小一年級', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小二年級', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小二年級', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小三年級', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小三年級', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小四年級', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小四年級', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小五年級', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小五年級', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小六年級', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國小六年級', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國中', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '國中', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '高中', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '高中', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '大專', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '大專', '女', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '社會', '男', '前進單足S形', '', '', '1', '60');
        $this->setGrouping('菁英組', '社會', '女', '前進單足S形', '', '', '1', '60');

    }

    private function setGrouping($level, $group, $gender, $item, $gameType, $remark, $gameDay, $estimate)
    {
        $numberOfPlayer = app(EnrollModel::class)->countGameItemNumberOfPlayer($level, $group, $gender, $item, $gameType);

        if ($numberOfPlayer) {

            $estimateTime = ScheduleModel::where('game_id', config('app.game_id'))->where('game_day', $gameDay)->orderByDesc('id')->value('estimate_time');

            if (is_null($estimateTime)) {
                $estimateTime = date('Y-m-d') . ' 09:00:00';
            } else {

                switch ($item) {
                    case '初級指定套路':
                    case '中級指定套路':
                        $每次上場人數 = 1;
                        break;
                    default:
                        $每次上場人數 = 2;
                        break;
                }

                $estimateTime = date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s", strtotime($estimateTime))) + (($estimate * $numberOfPlayer) / $每次上場人數));
//                dd($estimateTime);
            }

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
                'estimate_time'    => $estimateTime,
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
