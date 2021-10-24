<?php

namespace App\Repositories;

use App\Models\ArabicFootnote;
use App\Repositories\BaseRepository;

/**
 * Class ArabicFootnoteRepository
 * @package App\Repositories
 * @version October 16, 2021, 1:53 pm +0630
*/

class ArabicFootnoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'arabic_id',
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
        return ArabicFootnote::class;
    }
}
