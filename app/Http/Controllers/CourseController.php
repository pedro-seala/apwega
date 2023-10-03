<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $courses = Course::items();

        return view('config.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $courses = Course::items(8);

        return view('config.course.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $stored = Course::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Course $course
     * @return \Illuminate\View\View
     */
    public function edit(Course $course): View
    {
        return view('config.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SchoolPlan $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Course $course): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $course->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\SchoolPlan $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Course $course): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $course->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('courses.index'));
    }
}
