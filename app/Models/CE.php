<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CE extends Model
{
    use HasFactory;

    protected $table = 'ccee';

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}
