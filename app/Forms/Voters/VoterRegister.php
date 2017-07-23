<?php
namespace Elector\Forms\Voters;

use Phalcon\Forms\Form;
use Elector\Forms\Elements\Email;

use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;


class VoterLogin extends Form
{
    public function initialize()
    {

        $email = new Email('voterEmail', ['class' => 'form-control']);
        $email->setLabel('Email address');

        $firstName = new Text('voterFirstName', ['class' => 'form-control']);
        $firstName->setLabel('First name');

        $lastName = new Text('voterLastName', ['class' => 'form-control']);
        $lastName->setLabel('Last name');

        $password = new Password('voterPassword', ['class' => 'form-control']);
        $password->setLabel('Password');

        $passwordConfirm = new Password('voterPasswordConfirm', ['class' => 'form-control']);
        $passwordConfirm->setLabel('Confirm password');

        $submit = new Submit('Login', ['class' => 'btn btn-primary btn-raised']);

        $this->add($email);
        $this->add($firstName);
        $this->add($lastName);
        $this->add($password);
        $this->add($passwordConfirm);

        $this->add($submit);
    }

    public function renderDecorated($name)
    {
        $element  = $this->get($name);

        echo '<div class="form-group label-floating">';
        
        echo '<label class="control-label padding-10" for="', $element->getName(), '">', $element->getLabel(), '</label>';

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