<?php
namespace Elector\Validation;

use Phalcon\DI;

use Phalcon\Validation;
use Phalcon\Validation\Validator;
use Phalcon\Validation\Message;


class FaceDetection extends Validator
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
        $file = $validator->getValue($attribute);
        $file_path = $file['tmp_name'];
        
        $image = \Helpers::imageto64($file_path);

        $detector = DI::getDefault()->get('faceDetector');

        $response = $detector->detect($image);
        $result = json_decode($response->getBody(), true);
        
        if(array_key_exists('Errors', $result)) {

            $message = $this->getOption('message');

            if (!$message) {
                $message = 'We can\'t find face in this image.';
            }

            $validator->appendMessage(
                new Message($message, $attribute, 'FaceDetection')
            );

            return false;
        } 
        elseif(array_key_exists('images', $result)) {
            // We need to check if there's more than one face
            if(count($result['images'][0]['faces']) > 1) {
                $message = 'Too many faces, you must upload image with only your face on it.';

                $validator->appendMessage(
                    new Message($message, $attribute, 'FaceDetection')
                );

                return false;
            } else {
                $detector->enroll($image, $file['name'], $this->getOption('gallery_name'));
                return true;
            }
        } 
        else {
            throw new Exception('Error Processing Request: <strong>' . __FILE__ . ': ' . __LINE__ . '</strong>', 1);
        }
    }
}