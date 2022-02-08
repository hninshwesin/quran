<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UbaseinFootnote
 * @package App\Models
 * @version November 8, 2021, 2:13 pm +0630
 *
 * @property \App\Models\Ubasein $ubasein
 * @property integer $ubasein_id
 * @property string $heading
 * @property string $notes
 * @property string $files
 */
class UbaseinFootnote extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ubasein_footnotes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'ubasein_id',
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
        'ubasein_id' => 'integer',
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
    public function ubasein()
    {
        return $this->belongsTo(\App\Models\Ubasein::class, 'ubasein_id', 'id');
    }
}
