<?php

class AlbumTrack extends AudioTrack
{
    //Attributes
    public string $album;
    public int $numPiste;

    //Methods
    public function __construct(string $t, string $c)
    {
        parent::__construct($t, $c);
    }
}
