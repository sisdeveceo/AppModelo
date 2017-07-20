<?php

namespace Sisdeve\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'label' => 'Nome.:',
                'rule' => 'required|max:100'
            ])
            ->add('email', 'email',[
                'label' => 'Email.:',
                'rule' => 'required|max:100|unique:users'
            ]);
    }
}
