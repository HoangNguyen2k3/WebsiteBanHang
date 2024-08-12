<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function productReviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function hasLiked($likeable)
    {
        return $this->likes()->where('likeable_id', $likeable->id)
            ->where('likeable_type', get_class($likeable))
            ->exists();
    }

    public function like($likeable)
    {
        if (!$this->hasLiked($likeable)) {
            $this->likes()->create([
                'likeable_id' => $likeable->id,
                'likeable_type' => get_class($likeable)
            ]);
        }
    }

    public function unlike($likeable)
    {
        $this->likes()->where('likeable_id', $likeable->id)
            ->where('likeable_type', get_class($likeable))
            ->delete();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
