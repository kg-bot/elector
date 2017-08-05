<?php

namespace Elector\Forms\Elements\Blank;

use Elector\Forms\Elements\ElectorElement;
use Phalcon\Tag;

class Regions extends ElectorElement
{

    /**
     * Renders the element widget returning html
     *
     * @param array attributes
     */
    public function render($attributes = null)
    {
        $attrs = $this->prepareAttributes($attributes);

        if(isset($attrs['help-block'])) {
            $helpBlock = $attrs['help-block'];
            unset($attrs['help-block']);
        }

        if(!isset($attrs['name'])) {
            $attrs['name'] = $attrs[0];
        }
        if(!isset($attrs['id'])) {
            $attrs['id'] = $attrs['name'];
        }

        $html = Tag::renderAttributes('<select ', $attrs);
        $html .= '>';
        $html .= '<option></option>';
        $html .= '</select>';
        
        if(isset($helpBlock)) {
            $html .= '<p class="help-block">' . $helpBlock . '</p>';
        }

        return $html;
    }
}