<?php

namespace App\Http\Controllers;

use App\Models\SealNote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SealNoteController extends Controller
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
        $sealNotes = SealNote::items();

        return view('config.sealNote.index', compact('sealNotes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('config.sealNote.create', [

            'sealNotes'     => SealNote::items(4),
            'months'        => SealNote::months(),
            'quarters'      => SealNote::quarters()

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
        $stored = SealNote::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('seal-notes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SealNote $sealNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\SealNote
     * @return \Illuminate\View\View
     */
    public function edit(SealNote $sealNote): View
    {
        return view('config.sealNote.edit', [

            'sealNote'     => $sealNote,
            'months'       => SealNote::months(),
            'quarters'     => SealNote::quarters()

        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SealNote $sealNote
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, SealNote $sealNote): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $sealNote->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('seal-notes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SealNote $sealNote)
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $sealNote->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('seal-notes.index'));
    }
}
