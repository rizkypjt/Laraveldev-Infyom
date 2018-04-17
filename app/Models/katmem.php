<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class katmem
 * @package App\Models
 * @version April 17, 2018, 3:19 am UTC
 *
 * @property string nama
 */
class katmem extends Model
{
    use SoftDeletes;

    public $table = 'kategori_member';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    
}
