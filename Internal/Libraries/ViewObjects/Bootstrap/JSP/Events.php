<?php namespace ZN\ViewObjects\Bootstrap\JSP;

use Jquery, Buffer;

class Events implements EventsInterface
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
    // Add Event Listener
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string   $selector
    // @param string   $event
    // @param callable $callback
    //
    //--------------------------------------------------------------------------------------------------------
    public function addEventListener(String $selector, String $event, Callable $callback)
    {
        echo Jquery::event()->$event($selector, Buffer::callback($callback));
    }

    //--------------------------------------------------------------------------------------------------------
    // Remove Event Listener
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string   $selector
    // @param string   $event
    //
    //--------------------------------------------------------------------------------------------------------
    public function removeEventListener(String $selector, String $event)
    {
        echo Jquery::event()->unbind($selector, $event);
    }
}
