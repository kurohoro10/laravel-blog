<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dojo extends Model
{
    protected $fillable = ['name', 'location', 'bio', 'dojo_id'];

    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    public function ninjas() {
        return $this->hasMany(Ninja::class);
    }
}
