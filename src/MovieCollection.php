<?php


class MovieCollection implements Countable
{

    public $collection;

    public function add($movie)
    {
        if(is_array($movie)){
            return array_map([$this,'add'],$movie);
        }
        $this->collection[] = $movie ;
    }

    public function count()
    {
        return count($this->collection);
    }

    public function markAllAsWatched()
    {
        foreach ($this->collection as $movie){
            $movie->watch();
        }
    }

}
