<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ShweFootnote
 * @package App\Models
 * @version May 29, 2021, 6:46 pm +0630
 *
 * @property \App\Models\Shwe $shwe
 * @property integer $shwe_id
 * @property string $heading
 * @property string $notes
 * @property string $files
 */
class ShweFootnote extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'shwe_footnotes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'shwe_id',
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
        'shwe_id' => 'integer',
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
    public function shwe()
    {
        return $this->belongsTo(\App\Models\Shwe::class, 'shwe_id', 'id');
    }
}
