<?php

namespace App\Repositories;

use App\Models\UhtaylwinooFootnote;
use App\Repositories\BaseRepository;

/**
 * Class UhtaylwinooFootnoteRepository
 * @package App\Repositories
 * @version October 16, 2021, 1:52 pm +0630
*/

class UhtaylwinooFootnoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uhtaylwinoo_id',
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
        return UhtaylwinooFootnote::class;
    }
}
