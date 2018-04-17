<?php

namespace App\Repositories;

use App\Models\Member;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MemberRepository
 * @package App\Repositories
 * @version April 17, 2018, 4:15 am UTC
 *
 * @method Member findWithoutFail($id, $columns = ['*'])
 * @method Member find($id, $columns = ['*'])
 * @method Member first($columns = ['*'])
*/
class MemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_lengkap',
        'institusi',
        'gender',
        'telpon'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Member::class;
    }
}
