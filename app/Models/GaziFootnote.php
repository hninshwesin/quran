<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class GaziFootnote
 * @package App\Models
 * @version November 8, 2021, 2:12 pm +0630
 *
 * @property \App\Models\Gazi $gazi
 * @property integer $gazi_id
 * @property string $heading
 * @property string $notes
 * @property string $files
 */
class GaziFootnote extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'gazi_footnotes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'gazi_id',
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
        'gazi_id' => 'integer',
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
    public function gazi()
    {
        return $this->belongsTo(\App\Models\Gazi::class, 'gazi_id', 'id');
    }
}
