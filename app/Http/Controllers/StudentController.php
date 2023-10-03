<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $students = Student::items();

        return view('others.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('others.student.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function store(Request $request): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $stored = Student::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Student $student
     * @return \Illuminate\View\View
     */
    public function edit(Student $student): View
    {
        return view('others.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     * @param \App\Models\Student $student
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Student $student): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $student->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Student $student): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $student->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('students.index'));
    }
}
