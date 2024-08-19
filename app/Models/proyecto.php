<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use PhpParser\Node\Stmt\Return_;

class preyecto extends Model
{
    use HasFactory;

    protected $table = 'proyecto';
    public $timestamps = false;
    protected $fillable= [
        'id',
        'name,'

    ];
    public function tarea(): HasMany{
        Return $this->hasMany(tarea::class);
    }
}
