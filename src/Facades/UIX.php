<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/21/16
 * Time: 8:16 PM
 */

namespace Raftalks\UIX\Facades;


use Illuminate\Support\Facades\Facade;

class UIX extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'uix';
    }
}