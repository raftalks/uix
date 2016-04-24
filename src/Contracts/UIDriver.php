<?php
/**
 * ${FILE_NAME}
 * @package    UIX
 * @author     raf <raftalks@gmail.com>
 * @copyright  Copyright (c) 2016, raf
 */

namespace Raftalks\UIX\Contracts;


interface UIDriver
{

    public function getStyles();


    public function getScripts();

    /**
     * Form Element Maker
     * @return mixed
     */
    public function form();

    /**
     * Layout Element Maker
     * @return mixed
     */
    public function layout();

    /**
     * Component Element Maker
     * @return mixed
     */
    public function component();
}