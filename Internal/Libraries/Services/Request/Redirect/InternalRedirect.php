<?php namespace ZN\Services\Request;

use CallController;

class InternalRedirect extends CallController implements InternalRedirectInterface
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
    // $redirect
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $redirect =
    [
        'time'   => 0,
        'data'   => []
    ];

    //--------------------------------------------------------------------------------------------------------
    // action()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string $action
    //
    //--------------------------------------------------------------------------------------------------------
    public function action(String $action)
    {
        $time = $this->redirect['time'];
        $data = $this->redirect['data'];

        $this->redirect = [];

        return redirect($action, $time, $data);
    }

    //--------------------------------------------------------------------------------------------------------
    // time()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var numeric $time
    //
    //--------------------------------------------------------------------------------------------------------
    public function time(Int $time = 0) : InternalRedirect
    {
        $this->redirect['time'] = $time;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // wait()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var numeric $time
    //
    //--------------------------------------------------------------------------------------------------------
    public function wait(Int $time = 0) : InternalRedirect
    {
        $this->redirect['time'] = $time;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // data()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function data(Array $data) : InternalRedirect
    {
        $this->redirect['data'] = $data;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // insert()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function insert(Array $data) : InternalRedirect
    {
        $this->redirect['data'] = $data;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // select()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string $key
    //
    //--------------------------------------------------------------------------------------------------------
    public function select(String $key)
    {
        return redirectData($key);
    }

    //--------------------------------------------------------------------------------------------------------
    // delete()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var mixed $key
    //
    //--------------------------------------------------------------------------------------------------------
    public function delete($key) : Bool
    {
        return redirectDeleteData($key);
    }
}
