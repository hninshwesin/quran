<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UhtaylwinooFootnote
 * @package App\Models
 * @version October 16, 2021, 1:52 pm +0630
 *
 * @property \App\Models\Uhtaylwinoo $uhtaylwinoo
 * @property integer $uhtaylwinoo_id
 * @property string $heading
 * @property string $notes
 * @property string $files
 */
class UhtaylwinooFootnote extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'uhtaylwinoo_footnotes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'uhtaylwinoo_id',
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
        'uhtaylwinoo_id' => 'integer',
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
    public function uhtaylwinoo()
    {
        return $this->belongsTo(\App\Models\Uhtaylwinoo::class, 'uhtaylwinoo_id', 'id');
    }
}
