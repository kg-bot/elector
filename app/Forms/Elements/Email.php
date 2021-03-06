<?php

namespace Elector\Forms\Elements;

use Phalcon\Forms\Element;
use Phalcon\Tag;

class Email extends Element
{

    /**
     * Renders the element widget returning html
     *
     * @param array attributes
     */
    public function render($attributes = null)
    {
        return Tag::emailField($this->prepareAttributes($attributes));
    }
}