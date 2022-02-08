<?php

namespace App\Repositories;

use App\Models\Gazi;
use App\Repositories\BaseRepository;

/**
 * Class GaziRepository
 * @package App\Repositories
 * @version November 8, 2021, 2:12 pm +0630
*/

class GaziRepository extends BaseRepository
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
        return Gazi::class;
    }
}
