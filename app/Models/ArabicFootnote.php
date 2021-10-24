<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ArabicFootnote
 * @package App\Models
 * @version October 16, 2021, 1:53 pm +0630
 *
 * @property \App\Models\Arabic $arabic
 * @property integer $arabic_id
 * @property string $heading
 * @property string $notes
 * @property string $files
 */
class ArabicFootnote extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'arabic_footnotes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'arabic_id',
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
        'arabic_id' => 'integer',
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
    public function arabic()
    {
        return $this->belongsTo(\App\Models\Arabic::class, 'arabic_id', 'id');
    }
}
