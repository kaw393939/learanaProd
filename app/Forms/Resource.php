<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Resource extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', [
                'label' => 'Resource title',
                'rules' => 'required|min:5',
                'error_messages' => [
                    'title.required' => 'The title field is mandatory.'
                ]
            ])
            ->add('url', 'url')
            ->add('publish', 'checkbox', [
                'label' => 'Publish',
                'default_value' => 'false'
            ])
            ->add('submit', 'submit', ['label' => 'Save form' ])

            ->add('clear', 'reset', ['label' => 'Clear form']);
    }

}
