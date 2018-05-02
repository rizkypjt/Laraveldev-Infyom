<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Member
 * @package App\Models
 * @version May 2, 2018, 2:29 am UTC
 *
 * @property varchar(45) nama_lengkap
 * @property varchar(20) telpon
 * @property varchar(45) institusi
 * @property radio gender
 * @property int kategori_id
 */
class Member extends Model
{
    use SoftDeletes;

    public $table = 'member';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama_lengkap',
        'telpon',
        'institusi',
        'gender',
        'kategori_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_lengkap' => 'required',
        'telpon' => 'required',
        'institusi' => 'required',
        'gender' => 'required',
        'kategori_id' => 'required'
    ];

    
}
