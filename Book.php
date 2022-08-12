<?php

require_once("./Doc.php");

class Book extends Document
{
    private string $authorName;
    private int $pageNumber;

    public function __construct(int $code, string $publishingName, int $releaseCopiesNumber, string $authorName, int $pageNumber)
    {
        parent::__construct($code, $publishingName, $releaseCopiesNumber);
        $this->authorName = $authorName;
        $this->pageNumber = $pageNumber;
    }

    public function getAuthorName() : string 
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName)
    {
        $this->authorName = $authorName;
    }

    public function getPageNumber() : int 
    {
        return $this->pageNumber;
    }

    public function setPageNumber(int $pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    public function toString()
    {
        return "Code: " . $this->code . " " . "Publishing Name: " . $this->publishingName . " " .
               "Release Copies Number:  " . $this->releaseCopiesNumber . " " .
               "Author Name: " . $this->authorName . " " . "Pages Number: " . $this->pageNumber;
    } 

    
}