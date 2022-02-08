<?php

namespace App\Repositories;

use App\Models\GaziFootnote;
use App\Repositories\BaseRepository;

/**
 * Class GaziFootnoteRepository
 * @package App\Repositories
 * @version November 8, 2021, 2:12 pm +0630
*/

class GaziFootnoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gazi_id',
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
        return GaziFootnote::class;
    }
}
