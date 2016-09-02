<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PrimeFactors');
    }

    function it_returns_an_empty_array_for_1()
    {
    	$this->generate(1)->shouldBe([]);
    }

    function it_returns_2_for_4()
    {
    	$this->generate(2)->shouldBe([2]);
    }

    function it_returns_2_2_for_4()
    {
    	$this->generate(4)->shouldBe([2,2]);
    }

    function it_returns_2_2_for_6()
    {
    	$this->generate(6)->shouldBe([2,3]);
    }

    function it_returns_3_3_for_9()
    {
    	$this->generate(9)->shouldBe([3,3]);
    }

    function it_returns_2_5_for_10()
    {
    	$this->generate(10)->shouldBe([2,5]);
    }

    function it_returns_2_2_3_for_12()
    {
    	$this->generate(12)->shouldBe([2,2,3]);
    }

    function it_returns_13_for_13()
    {
    	$this->generate(13)->shouldBe([13]);
    }

    function it_returns_3_5_for_15()
    {
    	$this->generate(15)->shouldBe([3,5]);
    }

    function it_returns_5_5_for_25()
    {
    	$this->generate(25)->shouldBe([5,5]);
    }

    function it_returns_2_5_5_for_50()
    {
    	$this->generate(50)->shouldBe([2,5,5]);
    }

    function it_returns_2_2_5_5_for_100()
    {
    	$this->generate(100)->shouldBe([2,2,5,5]);
    }

}
