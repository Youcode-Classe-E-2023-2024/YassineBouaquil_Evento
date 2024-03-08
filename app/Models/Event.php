<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = ['title', 'description','place','price','category','start_date','available_places', 'end_date', 'guest_capacity', 'auto_approval', ];

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }

}

