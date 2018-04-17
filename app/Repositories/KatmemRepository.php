<?php

namespace App\Repositories;

use App\Models\Katmem;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KatmemRepository
 * @package App\Repositories
 * @version April 17, 2018, 3:33 am UTC
 *
 * @method Katmem findWithoutFail($id, $columns = ['*'])
 * @method Katmem find($id, $columns = ['*'])
 * @method Katmem first($columns = ['*'])
*/
class KatmemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Katmem::class;
    }
}
