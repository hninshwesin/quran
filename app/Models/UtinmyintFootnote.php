<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UtinmyintFootnote
 * @package App\Models
 * @version October 16, 2021, 1:53 pm +0630
 *
 * @property \App\Models\Utinmyint $utinmyint
 * @property integer $utinmyint_id
 * @property string $heading
 * @property string $notes
 * @property string $files
 */
class UtinmyintFootnote extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'utinmyint_footnotes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'utinmyint_id',
        'heading',
        'notes',
        'files'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'utinmyint_id' => 'integer',
        'heading' => 'string',
        'files' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function utinmyint()
    {
        return $this->belongsTo(\App\Models\Utinmyint::class, 'utinmyint_id', 'id');
    }
}
