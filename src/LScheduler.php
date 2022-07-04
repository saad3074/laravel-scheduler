<?php

namespace tearsilent\LaravelScheduler;

use tearsilent\LaravelScheduler\requests\Schedulr;

/**
 * LScheduler
 */
class LScheduler
{
    
    
    /**
     * ScheduleJob
     *
     * @param  mixed $data
     * @return void
     */
    public static function ScheduleJob($data = null)
    {
        return new Schedulr($data);
    }

    
}
