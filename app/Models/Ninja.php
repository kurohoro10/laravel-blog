<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ninja extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'dojo_id'];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    public function dojo() {
        return $this->belongsTo(Dojo::class);
    }
}
