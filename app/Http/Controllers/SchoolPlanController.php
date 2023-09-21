<?php

namespace App\Http\Controllers;

use App\Models\SchoolPlan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SchoolPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *@return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('config.schoolPlan.index', [
            'courses' => SchoolPlan::courses(),
            'classes' => SchoolPlan::classes()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('config.schoolPlan.create', [

            'courses' => SchoolPlan::courses(),
            'classes' => SchoolPlan::classes(),
            'subjects' => SchoolPlan::school_subjects(),
            'subject_categories' => SchoolPlan::subject_categories()

        ]);
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
        $stored = SchoolPlan::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('school-plans.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolPlan $schoolPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\SchoolPlan $schoolPlan
     * @return \Illuminate\View\View
     */
    public function edit(SchoolPlan $schoolPlan)
    {
        return view('config.schoolPlan.edit', [

            'schoolPlan' => $schoolPlan,
            'courses' => SchoolPlan::courses(),
            'classes' => SchoolPlan::classes(),
            'subjects' => SchoolPlan::school_subjects(),
            'subject_categories' => SchoolPlan::subject_categories()

        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SchoolPlan $SchoolPlan
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, SchoolPlan $schoolPlan): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $schoolPlan->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('school-plans.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\SchoolPlan $schoolPlan
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SchoolPlan $schoolPlan): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $schoolPlan->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('school-plans.index'));
    }

    /**
     * Get the specified resource from storage
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function get(Request $request): View
    {
        return view('config.schoolPlan.index', [

            'courses' => SchoolPlan::courses(),
            'classes' => SchoolPlan::classes(),
            'schoolPlan' => SchoolPlan::item(
                $request->course_id,
                $request->class_id
            )

        ]);

    }
}
