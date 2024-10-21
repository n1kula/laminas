<?php

namespace User\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use User\Form\Register\RegisterForm;
use User\Model\Table\UsersTable;

class RegisterController extends AbstractActionController
{

    public function __construct(private readonly UsersTable $usersTable)
    {  
    }

    public function indexAction()
    {
        $registerForm = new RegisterForm();
        return new ViewModel([
            'form' => $registerForm
        ]);
    }
}
