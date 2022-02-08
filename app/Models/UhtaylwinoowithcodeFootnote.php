<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UhtaylwinoowithcodeFootnote
 * @package App\Models
 * @version December 16, 2021, 10:33 pm +0630
 *
 * @property \App\Models\Uhtaylwinoowithcode $uhtaylwinoowithcode
 * @property integer $uhtaylwinoowithcode_id
 * @property string $heading
 * @property string $notes
 * @property string $files
 */
class UhtaylwinoowithcodeFootnote extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'uhtaylwinoowithcode_footnotes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'uhtaylwinoowithcode_id',
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
        'uhtaylwinoowithcode_id' => 'integer',
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
    public function uhtaylwinoowithcode()
    {
        return $this->belongsTo(\App\Models\Uhtaylwinoowithcode::class, 'uhtaylwinoowithcode_id', 'id');
    }
}
