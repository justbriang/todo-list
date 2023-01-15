<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Task extends Model
{
    use Searchable, HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'due_date',
        'status'
    ];

    protected $casts = [
        'due_date' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function dueDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('M d Y')
        );
    }
}
