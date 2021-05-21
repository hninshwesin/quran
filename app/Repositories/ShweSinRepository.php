<?php

namespace App\Repositories;

use App\Models\ShweSin;
use App\Repositories\BaseRepository;

/**
 * Class ShweSinRepository
 * @package App\Repositories
 * @version May 22, 2021, 2:10 am +0630
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
