<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    public function Comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function User(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function Category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
