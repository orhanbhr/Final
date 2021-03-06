<?php
//--------------------------------------------------------------------------------------------------
// Aliases
//--------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Get Aliases Name
//--------------------------------------------------------------------------------------------------
$autoloaderAliases = Config::get('Autoloader')['aliases'];
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Set Aliases Name
//--------------------------------------------------------------------------------------------------
if( ! empty($autoloaderAliases) ) foreach( $autoloaderAliases as $alias => $origin )
{
    class_alias($origin, $alias);
}
//--------------------------------------------------------------------------------------------------