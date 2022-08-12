<?php

require_once("./Doc.php");

class Newspaper extends Document
{
    private int $releaseDay;

    public function __construct(int $code, string $publishingName, int $releaseCopiesNumber, int $releaseDay)
    {
        parent::__construct($code, $publishingName, $releaseCopiesNumber);
        $this->releaseDay = $releaseDay;
    }

    public function getReleaseDay() : int
    {
        return $this->releaseDay;
    }

    public function setReleaseDay(int $releaseDay)
    {
        $this->releaseDay = $releaseDay;
    }

    public function toString()
    {
        return "Code: " . $this->code . " " . "Publishing Name: " . $this->publishingName . " " .
               "Release Copies Number:  " . $this->releaseCopiesNumber . " " .
               "Release Day: " . $this->releaseDay;
    }
}