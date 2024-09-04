<?php

class Vacancies extends Content
{
    public function __construct(string $title, string $text)
    {
        parent::__construct($title, $text);
    }

    public function addApply(): string
    {
        return ($this->title) . " | <a href='#'>Apply now</a>";
    }
}