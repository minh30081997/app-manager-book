<?php

require_once("./Doc.php");

class Magazine extends Document
{
    private int $releaseNumber;
    private int $releaseMonth;

    public function __construct(int $code, string $publishingName, int $releaseCopiesNumber, int $releaseNumber, int $releaseMonth)
    {
        parent::__construct($code, $publishingName, $releaseCopiesNumber);
        $this->releaseNumber = $releaseNumber;
        $this->releaseMonth = $releaseMonth;
    }

    public function getReleaseNumber() : int
    {
        return $this->releaseNumber;
    }

    public function setReleaseNumber(int $releaseNumber)
    {
        $this->releaseNumber = $releaseNumber;
    }

    public function getReleaseMonth() : int
    {
        return $this->releaseMonth;
    }

    public function setReleaseMonth(int $releaseMonth)
    {
        $this->releaseMonth = $releaseMonth;
    }

    public function toString()
    {
        return "Code: " . $this->code . " " . "Publishing Name: " . $this->publishingName . " " .
               "Release Copies Number:  " . $this->releaseCopiesNumber . " " .
               "Release Number: " . $this->releaseNumber . " " . "Release Month: " . $this->releaseMonth;
    }
}
