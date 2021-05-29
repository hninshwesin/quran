<?php

namespace App\Repositories;

use App\Models\Shwe;
use App\Repositories\BaseRepository;

/**
 * Class ShweRepository
 * @package App\Repositories
 * @version May 29, 2021, 6:46 pm +0630
*/

class ShweRepository extends BaseRepository
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
        return Shwe::class;
    }
}
