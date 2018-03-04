<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    public function index()
    {
        //
        $records = Course::all()->toArray();

        $pageTitle = 'Courses';

        $records = data2Table($records);

        return view('courses.index')->with(compact('records','pageTitle'));
    }

    public function UserCourses($userID = NULL)
    {
        //
        if ($userID == NULL) {
            $userID = Auth::user()->id;
        }
        $records = Course::where('user_id', $userID)->get()->toArray();

        $pageTitle = 'My Courses';

        $records = data2Table($records);

        return view('courses.index')->with(compact('records', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\CourseForm::class, [
            'method' => 'POST',
            'url' => route('course.store')
        ]);
        $pageTitle = 'Create Course';

        return view('courses.form', compact('form','pageTitle'));
    }

    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(\App\Forms\CourseForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
        $course = new Course();
        $course->user_id = Auth::id();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->publish = $request->has('publish');
        $course->save();
        return redirect()->route('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $resources = $course->resources()->get();
        $sections = $course->sections()->get();

        $pageTitle = 'Course';
        return view('courses.full')->with(compact('course', 'resources', 'sections','pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, Course $course)
    {
        //
        $edit = $formBuilder->create(\App\Forms\CourseForm::class, [
            'method' => 'PATCH',
            'url' => route('course.update', $course->id),
            'model' => $course,
        ]);
        //
        $delete = $formBuilder->create(\App\Forms\DeleteForm::class, [
            'method' => 'DELETE',
            'url' => route('course.destroy', $course->id),
        ]);
        $pageTitle = 'Edit Course';
        return view('courses.formEdit', compact('edit','delete', 'pageTitle'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(FormBuilder $formBuilder, Request $request, Course $course)
    {
        //
        $form = $formBuilder->create(\App\Forms\CourseForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
        $course->title = $request->title;
        $course->description = $request->description;
        $course->publish = $request->has('publish');
        $course->save();

        return redirect()->route('course.show',['course' => $course->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormBuilder $formBuilder, Course $course, Request $request)
    {
        // delete

        $course->delete();

        // redirect
        $request->session()->flash('message', 'Successfully deleted the nerd!');
        return redirect()->route('course.index');
    }
}
