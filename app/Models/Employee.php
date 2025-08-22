<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ← THIS LINE IS REQUIRED

class Employee extends Model
{
    use SoftDeletes; // comment out if you don't use deleted_at

    protected $table = 'employees';
    protected $primaryKey = 'emp_id';
    public $timestamps = true;

    protected $fillable = [
        'emp_name','emp_gender','emp_dob',
        'emp_category_id','emp_designation_id','emp_home_district_id',
        'emp_mobile','emp_email','emp_cpis_no',
        'emp_aadhar_enc','emp_aadhar_hash',
        'is_ex_serviceman','is_active'
    ];

    public function designation() { return $this->belongsTo(Designation::class, 'emp_designation_id','desig_id'); }
    public function category()    { return $this->belongsTo(Category::class, 'emp_category_id'); }
    public function district()    { return $this->belongsTo(District::class, 'emp_home_district_id'); }
}
