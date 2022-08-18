<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'title',
        'url',
        'desc',
    ];

    /**
     * Get the user that owns the share.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the likes for the share.
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Get the dislikes for the share.
     */
    public function dislikes()
    {
        return $this->hasMany(Dislike::class);
    }
}
