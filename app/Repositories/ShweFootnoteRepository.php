<?php

namespace App\Repositories;

use App\Models\ShweFootnote;
use App\Repositories\BaseRepository;

/**
 * Class ShweFootnoteRepository
 * @package App\Repositories
 * @version May 29, 2021, 6:46 pm +0630
*/

class ShweFootnoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shwe_id',
        'heading',
        'notes',
        'files'
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
        return ShweFootnote::class;
    }
}
