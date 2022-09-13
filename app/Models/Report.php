<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $fillable = [
        // 'v_serial_no',
        // 'v_reg_no',
        // 'v_chasis_no',
        // 'v_engine_no',
        // 'v_route_no',
        // 'v_route_name_start',
        // 'v_route_name_end',
        // 'v_fitness_expiry_date',
        // 'v_tax_expiry_date',
        // 'v_route_permit_expire_date',
        // 'v_status',
        // 'v_owner_name',
        // 'v_owner_address',
        // 'owner_phone_no',
        // 'v_idetify_code ',
        // 'user_id',
    ];
}
