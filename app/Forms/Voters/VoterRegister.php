<?php
namespace Elector\Forms\Voters;

use Elector\Forms\ElectorForm;
use Phalcon\Forms\Element\Submit;

class VoterRegister extends ElectorForm
{

    public function initialize()
    {

        $formElements = $this->initializeRegisterForm('voter');

        $submit = new Submit('Register', ['class' => 'btn btn-primary btn-raised']);

        $this->add($submit);
    }

    public function renderDecorated($name)
    {
        $element  = $this->get($name);

        echo '<div class="form-group label-floating">';
        
        echo '<label class="control-label" for="', $element->getName(), '">', $element->getLabel(), '</label>';

        echo $element;
        

        // Get any generated messages for the current element
        $messages = $this->getMessagesFor(
            $element->getName()
        );

        if (count($messages)) {
            // Print each element
            echo "<div class='messages'>";

            foreach ($messages as $message) {
                echo $this->flash->error($message);
            }

            echo '</div>';
        }

        echo '</div>';
    }

    public function renderImage($name, $placeholder)
    {
        $element  = $this->get($name);

        echo '<div class="form-group label-floating">';
        
        echo '<input type="text" readonly="" class="form-control" placeholder="' . $placeholder . '"></label>';

        echo $element;
        

        // Get any generated messages for the current element
        $messages = $this->getMessagesFor(
            $element->getName()
        );

        if (count($messages)) {
            // Print each element
            echo "<div class='messages'>";

            foreach ($messages as $message) {
                echo $this->flash->error($message);
            }

            echo '</div>';
        }

        echo '</div>';
    }
}