<?php namespace ZN\DataTypes\XML;

interface LoaderInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Load
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string   $file
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(String $file) : String;
}
