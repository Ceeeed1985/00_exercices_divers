<?php

class Articles extends Content
{
    protected bool $isBreakingNews;

    public function __construct(string $title, string $text, bool $isBreakingNews = false)
    {
        parent::__construct($title, $text);
        $this->isBreakingNews = $isBreakingNews;
    }

    public function addBreakingNews()
    {
        if($this->isBreakingNews === true){
            return "BREAKING NEWS | " . $this->isBreakingNews;
        } else {
            return "Error";
        }
    }
}