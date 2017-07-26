<?php
namespace Elector\Forms\Elements;

use Phalcon\Forms\Element;
use Phalcon\Tag;

class Image extends Element
{
    public function render($attributes = null)
    {
        $attrs = $this->prepareAttributes($attributes);

        if(!isset($attrs['name'])) {
            $attrs['name'] = $attrs[0];
        }
        if(!isset($attrs['id'])) {
            $attrs['id'] = $attrs['name'];
        }
        // This is used in Bootstrap Material Design help block
        if(isset($attrs['help-block'])) {
            $helpBlock = $attrs['help-block'];
            unset($attrs['help-block']);
        }
        $html = Tag::renderAttributes('<input type="file"', $attrs);
        $html .= 'accept="image/*">';

        if(isset($helpBlock)) {
            $html .= '<p class="help-block">' . $helpBlock . '</p>';
        }

        return $html;
    }
}