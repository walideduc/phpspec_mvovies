<?php

/**
 * Created by PhpStorm.
 * User: waled
 * Date: 11/17/17
 * Time: 11:30 AM
 */
class Movie
{
    protected $rating;

    protected $watched = false;
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
    public function watch()
    {
        $this->watched = true;
    }

    public function isWatched()
    {
        return $this->watched ;
    }

    public function setRating($rate)
    {
        if($rate > 5) throw new InvalidArgumentException() ;
        $this->rating = 5;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getTitle()
    {
        return $this->title;
    }


}