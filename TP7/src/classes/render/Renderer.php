<?php
namespace iutnc\deefy\audio\render;

interface Renderer
{
    const COMPACT = 1;
    const LONG = 2;

    public function render(int $selector): string;

}