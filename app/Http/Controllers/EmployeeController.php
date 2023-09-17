<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //show home
    public function index()
    {
        return view('employees.index', [
            //'heading' => 'Latest Listings',
            //'listings' => Employees::latest()->filter(request(['tag', 'search' ]))->paginate(6) //all //simplePaginate <- for next and prev
        ]);
    }
    
    //show employee create form
    public function create() {
        return view('employees.create');
    }
}
