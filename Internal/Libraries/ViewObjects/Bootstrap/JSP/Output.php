<?php namespace ZN\ViewObjects\Bootstrap\JSP;

use JS;

class Output implements OutputInterface
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
    // Alert
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string   $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function alert(String $value)
    {
        echo JS::alert($value);
    }

    //--------------------------------------------------------------------------------------------------------
    // Write
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string   $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function write(String $value)
    {
        echo JS::write($value);
    }
}
