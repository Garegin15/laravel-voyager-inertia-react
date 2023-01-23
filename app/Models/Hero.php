<?php

namespace App\Models;

use App\Events\HeroCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class Hero extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'health',
    ];

    public static function boot() {
        parent::boot();

        static::created(function($hero) {
            event(new HeroCreated($hero));
        });
	}

    public function weapons() {
        return $this->hasMany(Weapon::class);
    }
}
