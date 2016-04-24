<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/21/16
 * Time: 5:32 PM
 */

namespace Raftalks\UIX\Contracts;


interface BuilderFactory
{

    public function driver();

    public function layout();
}