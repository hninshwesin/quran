<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Shwe
 * @package App\Models
 * @version May 29, 2021, 6:46 pm +0630
 *
 * @property integer $chapter
 * @property integer $verse
 * @property string $translation
 */
class Shwe extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'shwes';


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
        'verse' => 'integer'
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
