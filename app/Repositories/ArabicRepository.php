<?php

namespace App\Repositories;

use App\Models\Arabic;
use App\Repositories\BaseRepository;

/**
 * Class ArabicRepository
 * @package App\Repositories
 * @version October 16, 2021, 1:53 pm +0630
*/

class ArabicRepository extends BaseRepository
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
        return Arabic::class;
    }
}
