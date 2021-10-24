<?php

namespace App\Repositories;

use App\Models\UtinmyintFootnote;
use App\Repositories\BaseRepository;

/**
 * Class UtinmyintFootnoteRepository
 * @package App\Repositories
 * @version October 16, 2021, 1:53 pm +0630
*/

class UtinmyintFootnoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'utinmyint_id',
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
        return UtinmyintFootnote::class;
    }
}
