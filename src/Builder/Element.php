<?php
/**
 * Element.php
 * @package    UIX
 * @author     raf <raftalks@gmail.com>
 * @copyright  Copyright (c) 2016, raf
 */

namespace Raftalks\UIX\Builder;


use Raftalks\UIX\Contracts\UIDriver;

class Element
{

    protected $driver;


    public function __construct(UIDriver $driver)
    {
        $this->driver = $driver;
    }




}