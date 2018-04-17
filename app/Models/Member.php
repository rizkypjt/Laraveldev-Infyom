<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Member
 * @package App\Models
 * @version April 17, 2018, 4:08 am UTC
 *
 * @property string nama_lengkap
 * @property string institusi
 * @property string telpon
 * @property char(1) gender
 */
class Member extends Model
{
    use SoftDeletes;

    public $table = 'member';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama_lengkap',
        'institusi',
        'telpon',
        'gender'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_lengkap' => 'string',
        'institusi' => 'string',
        'telpon' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_lengkap' => 'required',
        'institusi' => 'required',
        'gender' => 'required'
    ];

    
}
