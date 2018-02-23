<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class DeleteForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('submit', 'submit', ['label' => 'Delete' ]);

    }
}
