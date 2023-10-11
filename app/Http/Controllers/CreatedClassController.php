<?php

namespace App\Http\Controllers;

use App\Models\CreatedClass;
use App\Http\Requests\StoreCreatedClassRequest;
use App\Http\Requests\UpdateCreatedClassRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CreatedClassController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new CreatedClass;
    }


    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $createdClasses = CreatedClass::items();

        return view('others.createdClass.index', compact('createdClasses'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     *
     */
    public function create(): View
    {
        return view('others.createdClass.create', [
            'model' => $this->model
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Http\Requests\StoreCreatedClassRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCreatedClassRequest $request): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $stored = CreatedClass::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('created-classes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(CreatedClass $createdClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreatedClass $createdClass)
    {
        return view('others.createdClass.edit', [
            'model' => $this->model,
            'createdClass' => $createdClass
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \App\Http\Requests\StoreCreatedClassRequest $request
     * @param \App\Models\CreatedClass $createdClass
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCreatedClassRequest $request, CreatedClass $createdClass)
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $createdClass->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('created-classes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreatedClass $createdClass)
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $createdClass->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('created-classes.index'));
    }
}
