<?php

namespace App\Repositories;

use App\Models\HtayLwinOo;
use App\Repositories\BaseRepository;

/**
 * Class HtayLwinOoRepository
 * @package App\Repositories
 * @version May 24, 2021, 2:07 pm +0630
*/

class HtayLwinOoRepository extends BaseRepository
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
        return HtayLwinOo::class;
    }
}
