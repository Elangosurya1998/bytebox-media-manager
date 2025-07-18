<?php

namespace Elangosurya1998\ByteboxMediaManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elangosurya1998\ByteboxMediaManager\ByteboxMediaManager
 */
class ByteboxMediaManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Elangosurya1998\ByteboxMediaManager\ByteboxMediaManager::class;
    }
}
