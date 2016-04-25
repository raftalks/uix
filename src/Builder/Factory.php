<?php

namespace Raftalks\UIX\Builder;

use Illuminate\Support\Facades\Config;
use Raftalks\UIX\Builder\Bootstrap\Builder as BootstrapDriver;
use Raftalks\UIX\Builder\Polymer\Builder as PolymerDriver;
use Raftalks\UIX\Contracts\BuilderFactory;

class Factory implements BuilderFactory
{

    protected $config;

    protected $element;

    public function __construct($config = [])
    {
        $this->config = empty($config) ? Config::get('uix') : $config;
    }


    public function driver()
    {
        if(empty($this->element))
        {
            $this->element = new Element($this->getDefaultDriver());
        }

        return $this->element;
    }


    public function layout()
    {
        return view('uix::polymer.master');
    }
    
    
    public function makeBootstrapDriver()
    {
        return new BootstrapDriver();
    }


    public function makePolymerDriver()
    {
        return new PolymerDriver();
    }

    protected function getDefaultDriver()
    {
        $driver = $this->config['driver'];
        $driverMakeMethod = 'make' . camel_case($driver) . 'Driver';
        
        if(method_exists($this, $driverMakeMethod))
        {
            return $this->$driverMakeMethod();
        }
    }
}
