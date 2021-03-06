<?php namespace ZN\IndividualStructures\Benchmark;

class MemoryUsage implements MemoryUsageInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Calculated Memory
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $result
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function calculate(String $result) : Float
    {
        $resend  = $result."_end";
        $restart = $result."_start";

        if( ! isset(Properties::$memtests[$restart]) )
        {
            throw new BenchmarkException('[Benchmark::calculatedMemory(\''.$result.'\')] -> Parameter is not a valid test start!');
        }

        if( ! isset(Properties::$memtests[$resend]) )
        {
            throw new BenchmarkException('[Benchmark::calculatedMemory(\''.$result.'\')] -> Parameter is not a valid test end!');
        }

        return Properties::$memtests[$resend] - Properties::$memtests[$restart];
    }

    //--------------------------------------------------------------------------------------------------------
    // Memory Usage
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  bool $realMemory
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function normal(Bool $realMemory = false) : Int
    {
        return  memory_get_usage($realMemory);
    }

    //--------------------------------------------------------------------------------------------------------
    // Max Memory Usage
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  bool $realMemory
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function maximum(Bool $realMemory = false) : Int
    {
        return  memory_get_peak_usage($realMemory);
    }
}
