<?php

namespace Styde;

abstract class Image
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function display()
    {
        $img = $this->createResource();
        $this->sendHeaders();
        $this->doDisplay($img);
    }

    protected function sendHeaders()
    {
        header('Content-Type: '.$this->contentType());
    }

    abstract protected function createResource();
    abstract protected function contentType();
    abstract protected function doDisplay($img);
}