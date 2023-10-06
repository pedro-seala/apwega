<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SchoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request): RedirectResponse
    {
        /**
         * Show the specific alert
         * After evaluate the model operations
         */
        if ($request->type) {
            alert($request->title, $request->message, $request->type);
        }

        $school = School::item();

        if (isset($school)) {
            return redirect(route('schools.show', $school));
        } else {
            return redirect(route('schools.create'));
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('config.school.create');
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
        $stored = School::store($request);

        return redirect(route('schools.index', $stored));
    }

    /**
     * Display the specified resource.
     * @param \App\Models\School $school
     * @return \Illuminate\View\View
     */
    public function show(School $school)
    {
        return view('config.school.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\School $school
     * @return \Illuminate\View\View
     */
    public function edit(School $school): View
    {
        return view('config.school.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\School $school
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, School $school): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $school->_update($request);

        return redirect(route('schools.index', $updated));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\School $school
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(School $school): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $school->_destroy();

        return redirect(route('schools.index', $destroyed));
    }
}
