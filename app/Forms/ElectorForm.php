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

/** Validators */
use Phalcon\Validation\Validator\PresenceOf;
use Elector\Validation\EmailRegistered;
use Phalcon\Validation\Validator\Email as ValidateEmail;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Confirmation;
use Phalcon\Validation\Validator\File;
use Elector\Validation\FaceDetection;

class ElectorForm extends Form
{
    /**
     * This method creates register Phalcon Form Elements
     * @param  bool $finish Indicates should form be finished with generic submit button
     */
    protected function initializeRegisterForm($finish = false)
    {
        /** Email field */
        $email = new Email('email', ['class' => 'form-control']);
        $email->setLabel('Email address');
        $email->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.',
                ]
            ),
            new ValidateEmail (
                [
                    'message' => 'Please enter a valid email address.'
                ]
            ),
            new EmailRegistered(
                [
                    'message' => 'This email is already in use.'
                ]
            )
        ]);

        /** Password field */
        $password = new Password('password', ['class' => 'form-control']);
        $password->setLabel('Password');
        $password->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            ),
            new StringLength(
                [
                    'min'       => 6,
                    'messageMinimum'    => 'Please enter at least :min characters.'
                ]
            )
        ]);

        /** Password Confirm field */
        $passwordConfirm = new Password('PasswordConfirm', ['class' => 'form-control']);
        $passwordConfirm->setLabel('Confirm password');
        $passwordConfirm->addValidators([
                new PresenceOf(
                    [
                        'message'   => 'This field is required.'
                    ]
                ),
                new Confirmation(
                    [
                        'with'  => 'password',
                        'message'   => 'You must enter same value as in password field.'
                    ]
                )
        ]);

        /** First Name field */
        $firstName = new Text('FirstName', ['class' => 'form-control']);
        $firstName->setLabel('First name');
        $firstName->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            )
        ]);
        /** Last Name field */
        $lastName = new Text('LastName', ['class' => 'form-control']);
        $lastName->setLabel('Last name');
        $lastName->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            )
        ]);

        /** Profile image field */
        $profileImage = new Image('ProfileImage', ['help-block' => 'We need your image so we can validate it\'s acctually you.']);
        $profileImage->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            ),
            new File(
                [
                    'allowedTypes' => ['image/jpeg', 'image/png'],
                    'messageType' => 'Only image files are allowed.',
                ]
            ),
            new FaceDetection(
                [
                    'message' => 'We can\'t find face in this image.',
                    // Data used to enroll images with Kairos API
                    'gallery_name' => 'profile images'
                ]
            )
        ]);

        /** ID Card image field */
        $idImage = new Image('IdImage', ['help-block' => 'We need your id card image so we can validate it\'s acctually you.']);
        $idImage->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            ),
            new File(
                [
                    'allowedTypes' => ['image/jpeg', 'image/png'],
                    'messageType' => 'Only image files are allowed.'
                ]
            ),
            new FaceDetection(
                [
                    'message' => 'We can\'t find face in this image.',
                    // Data used to enroll images with Kairos API
                    'gallery_name' => 'id card images'
                ]
            )
        ]);

        // We need to get all countries available
        $countries = Countries::getAllCountries();

        $selectCountry = new SelectCountry('SelectCountry', [
            'class'         => 'form-control select-country select-country',
            'help-block'    => 'Please select country that is showed on your ID card citizenship',
            'countries'     => $countries]);
        $selectCountry->setLabel('Select Your Country');
        $selectCountry->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            )
        ]);

        // This element will be empty and populated with JavaScript
        $selectRegion = new SelectRegion('SelectRegion', [
            'class'         => 'form-control visible-help-block select-region',
            'disabled'      => true, 
            'help-block'    => 'Please first choose your country']);
        $selectRegion->setLabel("Select Your Region");
        $selectRegion->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            )
        ]);

        // This element will be empty and populated with JavaScript
        $selectCity = new SelectCity('SelectCity', [
            'class'         => 'form-control visible-help-block select-city',
            'disabled'      => true, 
            'help-block'    => 'Please first choose your region']);
        $selectCity->setLabel("Select Your City");
        $selectCity->addValidators([
            new PresenceOf(
                [
                    'message' => 'This field is required.'
                ]
            )
        ]);

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
            // This should always be called last
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

        if (count($messages) > 0) {
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

        if($element->getLabel() != '') {
            echo $element->label(['class' => 'control-label validator']);
        }

        echo $element;
        

        // Get any generated messages for the current element
        $messages = $this->getMessagesFor(
            $element->getName()
        );

        if(count($messages) > 0) {
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