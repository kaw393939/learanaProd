<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Registration extends Form
{
    public function buildForm()
    {
        $this
            ->add('user_id', 'text')
            ->add('section_id', 'text')
            ->add('submit', 'submit', ['label' => 'Register' ]);
    }
}
