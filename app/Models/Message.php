<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'msg',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'updated_at',
    ];

    // belongsTo
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // get all message after a timestamp
    public function getAllAfterTimestamp($timestamp)
    {
        return $this->where('created_at', '>', $timestamp)->get();
    }

}
