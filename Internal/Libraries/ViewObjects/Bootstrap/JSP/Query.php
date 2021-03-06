<?php namespace ZN\ViewObjects\Bootstrap\JSP;

use Jquery;

class Query implements QueryInterface
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
    // Create
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string   $selector
    // @param callable $callback
    //
    //--------------------------------------------------------------------------------------------------------
    public function create(String $selector, Callable $callback)
    {
        $class = new Jquery;

        $class->selector($selector);
        echo $callback($class) . EOL;
        echo $class->create();
    }

    //--------------------------------------------------------------------------------------------------------
    // Selector
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $selector
    //
    //--------------------------------------------------------------------------------------------------------
    public function selector(String $selector) : Query
    {
        Jquery::selector($selector);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Property
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed ...$args
    //
    //--------------------------------------------------------------------------------------------------------
    public function property(...$args) : Query
    {
        Jquery::property(...$args);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Complete
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function complete()
    {
        echo Jquery::create();
    }
}
