<?php

namespace spec;

use Movie;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('I\'m a legend');
        $this->shouldHaveType(Movie::class);
    }

    function it_can_be_rated()
    {

        $this->setRating(5);

        $this->getRating()->shouldBe(5);
    }

    function its_rating_should_not_exceed_five()
    {
        $this->shouldThrow('InvalidArgumentException')->duringSetRating(9);
    }

    function it_can_be_watched(){
        $this->watch();
        $this->shouldBeWatched();
    }

    function it_can_fetch_the_title_of_movie(){
        $this->getTitle()->shouldBe('I\'m a legend');
    }


}
