<?php

namespace Styde;

class ImageJpeg extends Image
{
    protected function createResource()
    {
        return imagecreatefromjpeg($this->path);
    }

    protected function contentType()
    {
        return 'image/jpeg';
    }

    protected function doDisplay($img)
    {
        imagejpeg($img);
    }
}