<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Los campos que queremos permitir

    /* protected $fillable = ['name', 'description', 'category']; */

    //Los campos que queremos ignorar

        //protected $guarded = ['status'];
        protected $guarded = [];

    //protected $table = 'courses';

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => strtolower($value),
        );
    }
}
