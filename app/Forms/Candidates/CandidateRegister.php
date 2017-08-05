<?php
namespace Elector\Forms\Candidates;

use Elector\Forms\ElectorForm;

class CandidateRegister extends ElectorForm
{
    public function initialize()
    {

        $formElements = $this->initializeRegisterForm('candidate', true);
    }
}
