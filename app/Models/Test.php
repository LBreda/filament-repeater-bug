<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Test extends Model
{
    protected $fillable = ['title'];

    public function test_items(): BelongsToMany
    {
        return $this->belongsToMany(TestItem::class);
    }
}
