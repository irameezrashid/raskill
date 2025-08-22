<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index()
    {
        // Fetch employees with linked data
        $employees = Employee::with(['designation','category','district'])->get()->map(function($e){
            return [
                'id'          => $e->emp_id,
                'name'        => $e->emp_name,
                'designation' => $e->designation->desig_name ?? '',
                'category'    => $e->category->name ?? 'NA',
                'address'     => $e->district->name ?? 'NA',
                'email'       => $e->emp_email,
                'mobile'      => $e->emp_mobile,
            ];
        });

        // Return Blade view with data
        return view('modules.site.directory', compact('employees'));
    }
}
