<?php

namespace spec;

use MovieCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Movie;

class MovieCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MovieCollection::class);
    }

    function it_store_a_list_of_movies(Movie $movie){
        $this->add($movie);
        $this->shouldHaveCount(1);
    }

    function it_can_accepte_multiple_movies_to_add_one(Movie $movie1 , Movie $movie2){
        $this->add([$movie1,$movie2]);
        $this->shouldHaveCount(2);
    }

    function it_can_mark_all_movies_as_wathced(Movie $movie1 , Movie $movie2){

        $movie1->watch()->shouldBeCalled();
        $movie2->watch()->shouldBeCalled();

        $this->add([$movie1,$movie2]);

        $this->markAllAsWatched();
    }
}
