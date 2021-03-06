<?php namespace ZN\DataTypes\Arrays;

interface RemoveElementInterface
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
    // Remove Key
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $keys
    //
    //--------------------------------------------------------------------------------------------------------
    public function key(Array $array, $keys) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Remove Value
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $values
    //
    //--------------------------------------------------------------------------------------------------------
    public function value(Array $array, $values) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Remove
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $keys
    // @param mixed $values
    //
    //--------------------------------------------------------------------------------------------------------
    public function use(Array $array, $keys, $values) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Remove Last
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function last(Array $array, Int $count = 1, $type = 'array_pop') : Array;

    //--------------------------------------------------------------------------------------------------------
    // Remove First
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function first(Array $array, Int $count = 1) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Delete Element
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $object
    //
    //--------------------------------------------------------------------------------------------------------
    public function element(Array $array, $object) : Array;
}
