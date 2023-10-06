<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CountyController extends Controller
{
    /**
     * * Get paginated rows for select2
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function search(Request $request): LengthAwarePaginator
    {
        return County::search($request);
    }
}
