<?php namespace ZN\FileSystem\FTP;

interface ForgeInterface
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
    // createFolder()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function createFolder(String $path) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // deleteFolder()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteFolder(String $path) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // changeFolder()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function changeFolder(String $path) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // rename()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $oldName: empty
    // @param string $newName: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function rename(String $oldName, String $newName) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // deleteFile()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteFile(String $path) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // permission()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    // @param int $type   : 0755
    //
    //--------------------------------------------------------------------------------------------------------
    public function permission(String $path, Int $type = 0755) : Bool;
}
