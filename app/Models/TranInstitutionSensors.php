<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranInstitutionSensors extends Model
{
    use HasFactory;

    public $table = "tran_institution_sensors";

    public $timestamps = false;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'institution_id',
        'sensors_id',
        'serial_number',
        'expired_date',
    ];

    
}
