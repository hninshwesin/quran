<?php

namespace App\Repositories;

use App\Models\UhtaylwinoowithcodeFootnote;
use App\Repositories\BaseRepository;

/**
 * Class UhtaylwinoowithcodeFootnoteRepository
 * @package App\Repositories
 * @version December 16, 2021, 10:33 pm +0630
*/

class UhtaylwinoowithcodeFootnoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uhtaylwinoowithcode_id',
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
        return UhtaylwinoowithcodeFootnote::class;
    }
}
