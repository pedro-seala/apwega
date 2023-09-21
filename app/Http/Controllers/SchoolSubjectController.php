<?php

namespace App\Http\Controllers;

use App\Models\SchoolSubject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SchoolSubjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $schoolSubjects = SchoolSubject::items();

        return view('config.schoolSubject.index', compact('schoolSubjects'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $schoolSubjects = SchoolSubject::items();

        return view('config.schoolSubject.create', compact('schoolSubjects'));
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
        $stored = SchoolSubject::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('school-subjects.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolSubject $schoolSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\SchoolSubject $schoolSubject
     * @return \Illuminate\View\View
     */
    public function edit(SchoolSubject $schoolSubject): View
    {
        return view('config.schoolSubject.edit', compact('schoolSubject'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SchoolSubject $schoolSubject
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, SchoolSubject $schoolSubject): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $schoolSubject->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('school-subjects.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\SchoolSubject $schoolSubject
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SchoolSubject $schoolSubject): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $schoolSubject->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('school-subjects.index'));
    }
}
