<?php
namespace Elector\Forms;

use Elector\Forms\ElectorForm;

class Register extends ElectorForm
{
    public function initialize()
    {

        $this->initializeRegisterForm(true);
    }
}
