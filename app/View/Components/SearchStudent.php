<?php

namespace App\View\Components;

use App\Models\Student;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class SearchStudent extends Component
{
    public $students;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->students = Student::count();
    }


    /**
     * Get all students for select2
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function search(Request $request)
    {
        return Student::search($request);
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search-student');
    }
}
