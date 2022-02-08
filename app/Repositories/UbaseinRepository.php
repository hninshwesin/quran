<?php

namespace App\Repositories;

use App\Models\Ubasein;
use App\Repositories\BaseRepository;

/**
 * Class UbaseinRepository
 * @package App\Repositories
 * @version November 8, 2021, 2:13 pm +0630
*/

class UbaseinRepository extends BaseRepository
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
        return Ubasein::class;
    }
}
