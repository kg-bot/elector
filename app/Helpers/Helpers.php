<?php

class Helpers
{
    /**
     * Transforms image to base64 encoding
     * @param string Public path to the image
     */
    public static function imageto64($image)
    {
        return base64_encode(file_get_contents($image));
    }
}