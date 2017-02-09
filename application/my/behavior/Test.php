<?php
namespace app\my\behavior;

use think\Log;

class Test
{
    public function appInit(&$params)
    {
        // 行为逻辑
        var_dump($params);
    }
    public function responseEnd(&$params)
    {
        $runtime = number_format(microtime(true) - THINK_START_TIME, 10);
        //echo 'responseEnd::runtime:'.$runtime;

        Log::error('responseEnd::runtime:'.$runtime);
        // 行为逻辑
        //var_dump($params);
    }
    public function zzzzz(&$params){
        // 行为逻辑
        $runtime = number_format(microtime(true) - THINK_START_TIME, 10);
        echo $runtime;
        //Log::error('runtime:'.$runtime);
    }
}