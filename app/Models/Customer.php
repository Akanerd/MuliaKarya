<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'user_id', 'address', 'contact', 'avatar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function avatar(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('storage/avatar/' . $value),
        );
    }

}
