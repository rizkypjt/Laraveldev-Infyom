<?php

namespace App\Repositories;

use App\Models\Member;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MemberRepository
 * @package App\Repositories
 * @version May 2, 2018, 2:32 am UTC
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
        'telpon',
        'institusi',
        'gender',
        'kategori_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Member::class;
    }
}
