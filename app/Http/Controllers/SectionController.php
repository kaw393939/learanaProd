<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Section::all()->toArray();

        $pageTitle = 'Sessions';
        $records = data2Table($records);

        return view('sections.index')->with(compact('records','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($courseID, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\Section::class, [
            'method' => 'POST',
            'url' => route('section.store', ['courseid' => $courseID])
        ]);
        $pageTitle = 'Create Section';
        return view('sections.form', compact('form', 'pageTitle'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($courseID, Request $request)
    {

        $section = new Section();
        $section->user_id = Auth::id();
        $section->course_id = $courseID;
        $section->start = $request->start;
        $section->end = $request->end;
        $section->open = $request->open;
        $section->close = $request->close;
        $section->status = $request->status;
        $section->publish = $request->publish;

        $section->save();

        return redirect()->route('course.show', $courseID);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section $section
     * @return \Illuminate\Http\Response
     */
    public function show($course, Section $section, FormBuilder $formBuilder)
    {
        $registrations = $section->registrations()->get();

        $pageTitle = 'Roster';

        return view('registrations.index')->with(compact('registrations', 'pageTitle', 'section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section $section
     * @return \Illuminate\Http\Response
     */

    public function edit(FormBuilder $formBuilder, $course, Section $section)
    {
        //
        $edit = $formBuilder->create(\App\Forms\Section::class, [
            'method' => 'PATCH',
            'url' => route('section.update', [$course, $section->id]),
            'model' => $section,
        ]);
        //
        $delete = $formBuilder->create(\App\Forms\DeleteForm::class, [
            'method' => 'DELETE',
            'url' => route('section.destroy', [$course, $section->id]),
        ]);
        $pageTitle = 'Edit Section';
        return view('sections.formEdit', compact('edit','delete', 'pageTitle'));

    }

    public function update(FormBuilder $formBuilder, Request $request, $course, Section $section)
    {
        //
        $form = $formBuilder->create(\App\Forms\Section::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
        $section->start = $request->start;
        $section->end = $request->end;
        $section->open = $request->open;
        $section->close = $request->close;
        $section->status = $request->status;
        $section->publish = $request->publish;

        $section->save();

        return redirect()->route('section.show',['course' => $course, 'section' => $section->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormBuilder $formBuilder,$course, Request $request, Section $section)
    {
        // delete

        $section->delete();

        // redirect
        $request->session()->flash('message', 'Successfully deleted the nerd!');
        return redirect()->route('course.show',['course' => $course]);
    }
}
