<?php

use Phalcon\Mvc\Controller;
use Phalcon\Tag;

class ControllerBase extends Controller
{
    public function onConstruct()
    {
        $this->tag->setTitle('Elector');

        // Material Design fonts
        $this->assets->addCss("//fonts.googleapis.com/css?family=Roboto:300,400,500,700", false);
        $this->assets->addCss("//fonts.googleapis.com/icon?family=Material+Icons", false);
        
        $this->assets->addCss('/assets/bootstrap/dist/css/bootstrap.css');
        $this->assets->addCss("/assets/bootstrap-material-design/dist/css/bootstrap-material-design.css");
        $this->assets->addCss('/assets/bootstrap-material-design/dist/css/ripples.css');
        // Main css file, used to overide or fix default Material Design styles
        $this->assets->addCss('/css/main.css');


        $this->assets->addJs('/assets/jquery/dist/jquery.js');
        $this->assets->addJs('/assets/bootstrap/dist/js/bootstrap.js');
        $this->assets->addJs("/assets/bootstrap-material-design/scripts/material.js");
        $this->assets->addJs('/assets/bootstrap-material-design/scripts/ripples.js');
        // IE10 viewport hack for Surface/desktop Windows 8 bug
        $this->assets->addJs('https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js', false);
    }

    public function onInitialize()
    {
        $this->setDoctype(Tag::HTML5);
    }
}
