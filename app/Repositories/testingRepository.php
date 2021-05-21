<?php

namespace App\Repositories;

use App\Models\testing;
use App\Repositories\BaseRepository;

/**
 * Class testingRepository
 * @package App\Repositories
 * @version May 22, 2021, 2:20 am +0630
*/

class testingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'chapter',
        'verse',
        'translation'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return testing::class;
    }
}
