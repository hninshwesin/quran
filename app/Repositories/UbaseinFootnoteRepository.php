<?php

namespace App\Repositories;

use App\Models\UbaseinFootnote;
use App\Repositories\BaseRepository;

/**
 * Class UbaseinFootnoteRepository
 * @package App\Repositories
 * @version November 8, 2021, 2:13 pm +0630
*/

class UbaseinFootnoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ubasein_id',
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
        return UbaseinFootnote::class;
    }
}
