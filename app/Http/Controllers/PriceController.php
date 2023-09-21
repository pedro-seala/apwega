<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PriceController extends Controller
{

    /**
     * @var int $entity
     */
    public $entity;


    /**
     * @param \Illuminate\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->entity = $request->entity;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('config.price.index', [

            'entity'   => $this->entity,
            'prices'   => Price::items($this->entity),
            'classes'  => Price::classes()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('config.price.create', [
            'entity'                => $this->entity,
            'prices'                => Price::items($this->entity, 3),
            'classes'               => Price::classes(),
            'courses'               => Price::courses(),
            'paymentDescriptions'   => Price::payment_descriptions(),
            'schoolYears'           => Price::school_years()
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
        if ($this->entity) {
            return view('config.price.edit', [

                'price'                 => $price,
                'entity'                => $this->entity,
                'classes'               => Price::classes(),
                'paymentDescriptions'   => Price::payment_descriptions()

            ]);
        } else {
            return view('config.price.edit', [

                'price'                 => $price,
                'entity'                => $this->entity,
                'classes'               => Price::classes(),
                'courses'               => Price::courses(),
                'paymentDescriptions'   => Price::payment_descriptions(),
                'schoolYears'           => Price::school_years()

            ]);
        }
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
