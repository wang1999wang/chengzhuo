<?php
class index_c extends index{
    function index_a(){
        //¼ÆËãµ¹¼ÆÊ±
        /*
         * var NowTime = new Date('2015/05/04 14:14:36');
        var EndTime = new Date();
        var t = EndTime.getTime() - NowTime.getTime();

        var d = Math.floor(t / 1000 / 60 / 60 / 24);
        var h = Math.floor(t / 1000 / 60 / 60 % 24);
        var m = Math.floor(t / 1000 / 60 % 60);
        var s = Math.floor(t / 1000 % 60);
         * */
        $now_time=time();
        $start_time=strtotime('2015/05/04 14:14:36');
        
        $diff_time=$now_time-$start_time;
        $day=intval($diff_time/(60*60*24));
        $hour=intval($diff_time/(60*60)%24);
        $minue=intval($diff_time/60%60);
        $second=intval($diff_time%60);
        
        $this->assign('day',$day);
        $this->assign('hour',$hour);
        $this->assign('minue',$minue);
        $this->assign('second',$second);
        
        $this->display('index');
    }
}
