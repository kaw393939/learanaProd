<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;
class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Resource::all()->toArray();

        $pageTitle = 'Resources';
        $records = data2Table($records);


        return view('resources.index')->with(compact('records','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($courseID, FormBuilder $formBuilder)
    {
        //
        $form = $formBuilder->create(\App\Forms\Resource::class, [
            'method' => 'POST',
            'url' => route('resource.store',['courseid' => $courseID])
        ]);
        $pageTitle = 'Create Resource';
        return view('sections.form', compact('form','pageTitle'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($courseID, Request $request)
    {

        $resource = new Resource();
        $resource->user_id = Auth::id();
        $resource->course_id = $courseID;
        $resource->title = $request->title;
        $resource->url = $request->url;

        $resource->publish = $request->publish;

        $resource->save();

        return redirect()->route('resource.show',['course'=>$courseID, 'resource'=>$resource->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */

    public function show($course, Resource $resource)
    {


        $pageTitle = 'Resource';

        return view('resources.resource')->with(compact( 'resource', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, $course, Resource $resource)
    {
        //
        $edit = $formBuilder->create(\App\Forms\Resource::class, [
            'method' => 'PATCH',
            'url' => route('resource.update', [$course, $resource->id]),
            'model' => $resource,
        ]);
        //
        $delete = $formBuilder->create(\App\Forms\DeleteForm::class, [
            'method' => 'DELETE',
            'url' => route('resource.destroy', [$course, $resource->id]),
        ]);
        $pageTitle = 'Edit Resource';
        return view('resources.formEdit', compact('edit','delete', 'pageTitle'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(FormBuilder $formBuilder, Request $request, $course, Resource $resource)
    {
        //
        $form = $formBuilder->create(\App\Forms\Resource::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
        $resource->title = $request->title;
        $resource->url = $request->url;
        $resource->publish = $request->has('publish');
        $resource->save();

        return redirect()->route('resource.show',['course' => $course, 'resource' => $resource->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormBuilder $formBuilder,$course, Request $request, Resource $resource)
    {
        // delete

        $resource->delete();

        // redirect
        $request->session()->flash('message', 'Successfully deleted the nerd!');
        return redirect()->route('course.show',['course' => $course]);
    }
}
