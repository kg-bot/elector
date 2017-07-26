<?php

namespace Elector\Forms\Elements;

use Phalcon\Forms\Element;
use Phalcon\Tag;

class Countries extends Element
{

    /**
     * Renders the element widget returning html
     *
     * @param array attributes
     */
    public function render($attributes = null)
    {
        $attrs = $this->prepareAttributes($attributes);
        // We must use new variable and unset default onw because otherwise we would get countries in out HTML SELECt tag attributes
        $countries = $attrs['countries'];
        unset($attrs['countries']);
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
        foreach ($countries as $country) {
            $html .= '<option value="' .$country['CountryID'] . '">' . $country['Country'] . '</option>';
        }
        $html .= '</select>';
        
        if(isset($helpBlock)) {
            $html .= '<p class="help-block">' . $helpBlock . '</p>';
        }

        return $html;
    }
}