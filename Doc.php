<?php

class Document
{
    protected int $code;
    protected string $publishingName;
    protected int $releaseCopiesNumber;

    public function __construct(int $code, string $publishingName, int $releaseCopiesNumber)
    {
        $this->code = $code;
        $this->publishingName = $publishingName;
        $this->releaseCopiesNumber = $releaseCopiesNumber;
    }

    public function getCode() : int
    {
        return $this->code;
    }

    public function setCode(int $code)
    {
        $this->code = $code;
    }

    public function getPublishingName() : string
    {
        return $this->publishingName;
    }

    public function setPublishingName(string $publishingName)
    {
        $this->publishingName = $publishingName;
    }

    public function getReleaseCopiesNumber() : int
    {
        return $this->releaseCopiesNumber;
    }

    public function setReleaseCopiesNumber(int $releaseCopiesNumber)
    {
        $this->releaseCopiesNumber = $releaseCopiesNumber;
    }

}