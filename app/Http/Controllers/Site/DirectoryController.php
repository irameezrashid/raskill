<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Institute;

class DirectoryController extends Controller
{
    public function index() {
        $institutes = Institute::with(['head', 'district'])
            ->where('ins_authority', 'Govt')   // ✅ only Govt institutes
            ->get()
            ->map(function($i){
                return [
                    'id'          => $i->ins_id,
                    'name'        => $i->ins_name,
                    'category'    => $i->ins_nature, // ITI / Polytechnic / Directorate
                    'address'     => $i->district->name ?? $i->ins_area,
                    'email'       => $i->ins_email,
                    'mobile'      => $i->head->emp_mobile ?? 'NA',
                    'hoi'         => $i->head ? $i->head->emp_name : 'No Head Assigned',
                    'designation' => $i->head ? $i->head->designation->desig_name : 'No Head Assigned',
                    'department'  => $i->ins_authority,
                    'website'     => $i->ins_url ?? '#',  // ✅ prepare here
                ];
            });

        return view('modules.site.directory', compact('institutes'));
    }

}
