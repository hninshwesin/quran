<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class HtayLwinOo
 * @package App\Models
 * @version May 24, 2021, 2:07 pm +0630
 *
 * @property integer $chapter
 * @property integer $verse
 * @property string $translation
 */
class HtayLwinOo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'htay_lwin_oos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'chapter',
        'verse',
        'translation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'chapter' => 'integer',
        'verse' => 'integer',
        'translation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'chapter' => 'required',
        'verse' => 'required'
    ];

    
}
