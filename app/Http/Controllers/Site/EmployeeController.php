<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Read employees + linked names
        $employees = Employee::with(['designation','category','district'])
            ->get()
            ->map(function ($e) {
                return [
                    'id'          => $e->emp_id,
                    'name'        => $e->emp_name,
                    'designation' => $e->designation->name ?? '',
                    'department'  => '', // if you have a department field, map it here
                    'category'    => $e->category->name ?? '',
                    'email'       => $e->emp_email,
                    'mobile'      => $e->emp_mobile,
                    'address'     => $e->district->name ?? '', // showing district as "address"
                ];
            });

        return view('directory.index', compact('employees'));
    }
}
