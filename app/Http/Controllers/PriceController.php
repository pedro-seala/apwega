<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PriceController extends Controller
{

    /**
     * Get data from uri
     * @var int $entity
     */
    protected $entity;

    /**
     * New instance of price
     * @var \App\Models\Price
     */
    protected $model;

    /**
     * @param \Illuminate\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->entity = $request->entity;
        $this->model = new Price;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $entity = $this->entity;
        $prices = Price::items($this->entity);
        $model = $this->model;

        return view('config.price.index', compact('entity', 'prices', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $entity = $this->entity;
        $prices = Price::items($this->entity, 4);
        $model = $this->model;

        return view('config.price.create', compact('entity', 'prices', 'model'));
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
        $stored = Price::store($request);
        toast($stored['message'], $stored['type']);

        return redirect(route('prices.index', ['entity' => $this->entity]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Price $price
     * @return \Illuminate\View\View
     */
    public function edit(Price $price): View
    {
        $entity = $this->entity;
        $model = $this->model;

        return view('config.price.edit', compact('entity', 'price', 'model'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Price $price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Price $price): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $updated = $price->_update($request);
        toast($updated['message'], $updated['type']);

        return redirect(route('prices.index', ['entity' => $this->entity]));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Price $price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Price $price): RedirectResponse
    {
        /**
         * Evaluate the model operation
         * Return the specific alert
         */
        $destroyed = $price->_destroy();
        toast($destroyed['message'], $destroyed['type']);

        return redirect(route('dashboard'));
    }
}
