<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use SoftDeletes;

    protected $table = 'institutes';
    protected $primaryKey = 'ins_id';

    protected $fillable = [
        'ins_name',
        'ins_code',
        'ins_email',
        'ins_url',
        'emp_hoi_id',
        'region_id',
        'division_id',
        'district_id',
        'tehsil_id',
        'ins_area',
        'ins_authority',
        'ins_nature'
    ];

    public function head()
    {
        return $this->belongsTo(Employee::class, 'emp_hoi_id', 'emp_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
