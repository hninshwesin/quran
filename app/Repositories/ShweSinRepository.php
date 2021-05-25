<?php

namespace App\Repositories;

use App\Models\ShweSin;
use App\Repositories\BaseRepository;

/**
 * Class ShweSinRepository
 * @package App\Repositories
 * @version May 24, 2021, 1:38 pm +0630
*/

class ShweSinRepository extends BaseRepository
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
        return ShweSin::class;
    }
}
