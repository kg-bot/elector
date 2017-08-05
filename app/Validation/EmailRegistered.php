<?php
namespace Elector\Validation;

use Phalcon\Validation;
use Phalcon\Validation\Message;
use Phalcon\Validation\Validator;

use Phalcon\DI;

class EmailRegistered extends Validator
{
    /**
     * Executes the validation
     *
     * @param Validation $validator
     * @param string     $attribute
     * @return boolean
     */
    public function validate(Validation $validator, $attribute)
    {
        $value = $validator->getValue($attribute);

        $em = DI::getDefault()->get('doctrineEM');

        $email = $em->find("User", $value);

        if ($email) {

            return false;
        }

        return true;
    }
}