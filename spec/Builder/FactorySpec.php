<?php

namespace spec\Raftalks\UIX\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Raftalks\UIX\Builder\Factory');

        $this->shouldImplement('Raftalks\UIX\Contracts\BuilderFactory');
    }
}
