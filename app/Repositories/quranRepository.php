<?php

namespace App\Repositories;

use App\Models\quran;
use App\Repositories\BaseRepository;

/**
 * Class quranRepository
 * @package App\Repositories
 * @version May 20, 2021, 3:15 pm +0630
*/

class quranRepository extends BaseRepository
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
        return quran::class;
    }
}
