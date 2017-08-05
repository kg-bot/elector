<?php
namespace Elector\Forms\Elements;

use Phalcon\Forms\Element;

abstract class ElectorElement extends Element
{
    public function label($attributes = null)
    {

        return '<label class="control-label" for="' . $this->getAttribute('id', $this->getName()) . '">' . $this->getLabel() . '</label>';
    }
}