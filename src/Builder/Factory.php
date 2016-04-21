<?php

namespace Raftalks\UIX\Builder;

use Raftalks\UIX\Contracts\BuilderFactory;

class Factory implements BuilderFactory
{


    public function driver()
    {
        return 'current driver';
    }
}
