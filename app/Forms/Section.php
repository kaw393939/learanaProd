<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Section extends Form
{
    public function buildForm()
    {
        $this
            ->add('start', 'datetime-local')
            ->add('end', 'datetime-local')
            ->add('open', 'datetime-local')
            ->add('close', 'datetime-local')
            ->add('status', 'select', [
                'choices' => ['open' => 'Open', 'close' => 'Close'],
                'selected' => 'open',
                'empty_value' => '=== Select Status ==='
            ])
            ->add('publish', 'checkbox', [
                'label' => 'Publish',
                'default_value' => 'false'
            ])
            ->add('submit', 'submit', ['label' => 'Save form' ])

            ->add('clear', 'reset', ['label' => 'Clear form']);
    }
}
