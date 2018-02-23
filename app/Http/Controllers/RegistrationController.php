<?php

namespace App\Http\Controllers;

use App\Registration;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Registration::all();

        $pageTitle = 'Registration';

        return view('registrations.index')->with(compact('records','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course, Section $section, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\Registration::class, [
            'method' => 'POST',
            'url' => route('registration.store', ['course' => $course, 'section' => $section])
        ]);

        $course = $section->course()->get();
        $course = $course[0];

        $courseTitle = $course->title;
        $courseDescription = $course->description;
        $pageTitle = 'Register for Section';
        return view('registrations.register', compact('form', 'pageTitle', 'course', 'section', 'courseTitle', 'courseDescription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($course, $section, Request $request)
    {
        $registration = new registration();
        $registration->user_id = Auth::id();
        $registration->section_id = $section;
        $registration->save();
        return redirect()->route('registration.show', ['registration' => $registration, 'course' => $course,'section' => $section ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show($course, $section, Registration $registration)
    {
        $pageTitle = 'Registration';

        return view('registrations.full')->with(compact('registration', 'pageTitle', 'section', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit($course, $section, Registration $registration, FormBuilder $formBuilder)
    {
        //
        $edit = $formBuilder->create(\App\Forms\Registration::class, [
            'method' => 'PATCH',
            'url' => route('registration.update', [$course,$section, $registration->id]),
            'model' => $registration,
        ]);
        //
        $delete = $formBuilder->create(\App\Forms\DeleteForm::class, [
            'method' => 'DELETE',
            'url' => route('registration.destroy', [$course,$section, $registration->id]),
        ]);
        $pageTitle = 'Edit Registration';
        return view('sections.formEdit', compact('edit','delete', 'pageTitle'));

    }

    public function update(FormBuilder $formBuilder, Request $request, $course, $section, Registration $registration)
    {
        //
        $form = $formBuilder->create(\App\Forms\Section::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
        $registration->user_id = Auth::id();
        $registration->section_id = $section;
        $registration->save();

        return redirect()->route('registration.show',['course' => $course, 'section' => $section->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $course,$section,  Registration $registration)
    {
        // delete

        $registration->delete();

        // redirect
        $request->session()->flash('message', 'Successfully deleted the nerd!');
        return redirect()->route('section.show',['course' => $course, 'section' => $section]);
    }
}
