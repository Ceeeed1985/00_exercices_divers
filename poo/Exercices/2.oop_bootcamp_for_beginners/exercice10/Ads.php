<?php

class Ads extends Content
{
    public function __construct(string $title, string $text)
    {
        parent::__construct($title, $text);
    }

    public function getTitleToUppercase(): string
    {
        return strtoupper($this->title);
    }
}