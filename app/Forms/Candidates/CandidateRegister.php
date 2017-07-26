<?php
namespace Elector\Forms\Candidates;

use Elector\Forms\ElectorForm;
use Phalcon\Forms\Element\Submit;

use Rinvex\Country\CountryLoader;

use Elector\library\Cities\Cities;

class CandidateRegister extends ElectorForm
{
    public function initialize()
    {

        $formElements = $this->initializeRegisterForm('candidate', true);
    }
}