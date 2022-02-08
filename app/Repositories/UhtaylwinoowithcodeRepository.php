<?php

namespace App\Repositories;

use App\Models\Uhtaylwinoowithcode;
use App\Repositories\BaseRepository;

/**
 * Class UhtaylwinoowithcodeRepository
 * @package App\Repositories
 * @version December 16, 2021, 10:33 pm +0630
*/

class UhtaylwinoowithcodeRepository extends BaseRepository
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
        return Uhtaylwinoowithcode::class;
    }
}
