<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CourseForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', [
                'label' => 'Course title',
                'rules' => 'required|min:5',
                'error_messages' => [
                    'title.required' => 'The title field is mandatory.'
                ]
            ])
            ->add('description', 'textarea', [
                'label' => 'Course Description',
                'rules' => 'required|min:5,max:5000'
            ])
            ->add('publish', 'checkbox', [
                'label' => 'Publish',
            ])
            ->add('submit', 'submit', ['label' => 'Save form' ])

            ->add('clear', 'reset', ['label' => 'Clear form']);

    }
}
