<?php

namespace App\Repositories;

use App\Models\Uhtaylwinoo;
use App\Repositories\BaseRepository;

/**
 * Class UhtaylwinooRepository
 * @package App\Repositories
 * @version October 16, 2021, 1:52 pm +0630
*/

class UhtaylwinooRepository extends BaseRepository
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
        return Uhtaylwinoo::class;
    }
}
