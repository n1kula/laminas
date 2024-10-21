<?php

namespace User\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class RegisterController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
