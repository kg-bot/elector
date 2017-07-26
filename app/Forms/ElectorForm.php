<?php

namespace Elector\Forms;

use Phalcon\Forms\Form;

use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;
use Phalcon\Forms\Element\Select;

use Elector\Forms\Elements\Image;
use Elector\Forms\Elements\Countries as SelectCountry;
use Elector\Forms\Elements\Blank\Cities as SelectCity;
use Elector\Forms\Elements\Blank\Regions as SelectRegion;

use Elector\library\Countries\Countries;

class ElectorForm extends Form
{
    /**
     * This method creates register Phalcon Form Elements
     * @param  string $userType Used for element id and name generator
     * @param  bool $finish Indicates should form be finished with generic submit button
     */
    protected function initializeRegisterForm($userType = 'voter', $finish = false)
    {
        $email = new Email($userType . 'Email', ['class' => 'form-control']);
        $email->setLabel('Email address');

        $firstName = new Text($userType . 'FirstName', ['class' => 'form-control']);
        $firstName->setLabel('First name');

        $lastName = new Text($userType . 'LastName', ['class' => 'form-control']);
        $lastName->setLabel('Last name');

        $password = new Password($userType . 'Password', ['class' => 'form-control']);
        $password->setLabel('Password');

        $passwordConfirm = new Password($userType . 'PasswordConfirm', ['class' => 'form-control']);
        $passwordConfirm->setLabel('Confirm password');


        $profileImage = new Image($userType . 'ProfileImage', ['help-block' => 'We need your image so we can validate it\'s acctually you.']);

        $idImage = new Image($userType . 'IdImage', ['help-block' => 'We need your id card image so we can validate it\'s acctually you.']);

        // We need to get all countries available
        $countries = Countries::getAllCountries();

        $selectCountry = new SelectCountry($userType . 'SelectCountry', [
            'class' => 'form-control select-country select-country ' . $userType, 
            'data-type' => $userType,
            'help-block' => 'Please select country that is showed on your ID card citizenship', 
            'countries' => $countries]);
        $selectCountry->setLabel('Select Your Country');

        // This element will be empty and populated with JavaScript
        $selectRegion = new SelectRegion($userType . 'SelectRegion', [
            'class' => 'form-control visible-help-block select-region ' . $userType, 
            'data-type' => $userType,
            'disabled' => true, 
            'help-block' => 'Please first choose your country']);
        $selectRegion->setLabel("Select Your Region");

        // This element will be empty and populated with JavaScript
        $selectCity = new SelectCity($userType . 'SelectCity', [
            'class' => 'form-control visible-help-block select-city ' . $userType, 
            'data-type' => $userType,
            'disabled' => true, 
            'help-block' => 'Please first choose your region']);
        $selectCity->setLabel("Select Your City");

        $this->add($email);

        $this->add($firstName);
        $this->add($lastName);

        $this->add($password);
        $this->add($passwordConfirm);

        $this->add($profileImage);
        $this->add($idImage);

        $this->add($selectCountry);
        $this->add($selectRegion);
        $this->add($selectCity);

        if($finish) {
            // This should always be called last, you can also remove this line
            self::submitButton();
        }
    }

    protected function submitButton($name = 'Register')
    {
        $submit = new Submit($name, ['class' => 'btn btn-primary btn-raised']);

        $this->add($submit);
    }

    /**
     * Method used to render file chooser input fields
     * @param  $name Name of the element
     * @param  $placeholder What description should we show to user
     */
    public function renderFileChooser($name, $placeholder)
    {
        $element  = $this->get($name);

        echo '<div class="form-group label-floating">';
        
        echo '<input type="text" readonly="" class="form-control" placeholder="' . $placeholder . '">';

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

    /**
     * Overiding default Phalcon\Forms\Form::renderDecorated()
     * @param  string $name Name of the element
     */
    public function renderDecorated($name)
    {
        $element  = $this->get($name);

        echo '<div class="form-group label-floating">';

        echo '<label class="control-label" for="', $element->getAttribute('id', $element->getName()), '">', $element->getLabel(), '</label>';

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