<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\search;

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

    // store employee data
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'phone' => 'required',
            'address' => 'required',
            'position' => 'required',
            'department' => 'required',
            'start_date' => 'required',
            'remark' => 'required'
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures','public');
        }

        //$formFields['user_id'] = auth()->id();

        Employee::create($formFields);

        return redirect('/')->with('message', 'Employee added successfully!');
    }
    
    //show employee list
    public function show() {
        //dd(request('tag'));
        return view('employees.list', [
            'employees' => Employee::all()
        ]);
    }

    // Show edit form
    public function edit(Employee $employee) {
        return view('employees.edit', ['employee' => $employee]);
    }

    // update listing data
    public function update(Request $request, Employee $employee) {

        // //make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }

        $formFields = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'phone' => 'required',
            'address' => 'required',
            'position' => 'required',
            'department' => 'required',
            'remark' => 'required'
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures','public');
        }

        $employee->update($formFields);

        return back()->with('message', 'Employee updated successfully!');
    }
}
