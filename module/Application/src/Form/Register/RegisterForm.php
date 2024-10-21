<?php

declare(strict_types=1);

namespace User\Form\Register;

use Laminas\Form\Element\Date;
use Laminas\Form\Element\DateSelect;
use Laminas\Form\Element\Email;
use Laminas\Form\Element\Password;
use Laminas\Form\Element\Text;
use Laminas\Form\Form;

class RegisterForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('newAccount');
        $this->setAttribute('method', 'post');

        $this->add([
            'type' => Text::class,
            'name' => 'username',
            'options' => [
                'label' => 'USername',
                'label-attributes' => [
                    'class' => 'form-label'
                ],
            ],
            'attributes' => [
                'required' => true,
                'minlength' => 2,
                'maxlength' => 25,
                'pattern' => '^[a-zA-Z0-9]{2-25}$',
                'placeholder' => 'Enter username',
                'title' => 'Username must consist alphanumeric chars only',
                'data-bs-toggle' => 'tooltip',
                'data-bs-placement' => 'right',
                'class' => 'form-control'
            ]
        ]);

        $this->add([
            'type' => Email::class,
            'name' => 'email',
            'options' => [
                'label' => 'email',
                'label-attributes' => [
                    'class' => 'form-label'
                ],
            ],
            'attributes' => [
                'required' => true,
                'maxlength' => 128,
                'pattern' => '^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$',
                'placeholder' => 'Enter email',
                'title' => 'Provide valid email',
                'data-bs-toggle' => 'tooltip',
                'data-bs-placement' => 'right',
                'class' => 'form-control'
            ]
        ]);

        $this->add([
            'type' => DateSelect::class,
            'name' => 'dob',
            'options' => [
                'label' => 'DOB',
                'label-attributes' => [
                    'class' => 'form-label'
                ],
                'day_attributes' => [
                    'class' => 'form-select mx-2',
                    'id' => 'day'
                ],
                'month_attributes' => [
                    'class' => 'form-select',
                    'id' => 'month'
                ],
                'year_attributes' => [
                    'class' => 'form-select',
                    'id' => 'year'
                ],
            ],
            'attributes' => [
                'required' => true,
            ]
        ]);

        $this->add([
                'type' => Password::class,
                'name' => 'Password',
                'options' => [
                    'label' => 'password',
                    'label-attributes' => [
                        'class' => 'form-label'
                    ],
                ],
                'attributes' => [
                'required' => true,
                'minlength' => 8,
                'maxlength' => 25,
                'pattern' => '^[a-zA-Z0-9]{8-25}$',
            ]
        ]);
    }
}