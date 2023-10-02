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
     * GEt all rows of this model
     * @param int $pages
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public static function items(int $pages = 10): LengthAwarePaginator
    {
        return self::orderBy('id', 'desc')
                ->paginate($pages);
    }
}
