<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    /**
     * Get all rows of this model
     * @param int $pages
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public static function items(int $pages = 6): LengthAwarePaginator
    {
        return self::orderBy('id', 'desc')
                ->paginate($pages);
    }


    /**
     * Get paginated rows for select2
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public static function search($request): LengthAwarePaginator
    {
        return self::select('id', 'name')
                    ->where('name', 'like', '%' . $request->searchItem . '%')
                    ->paginate(5, ['*'], 'page', $request->page);
    }
}
