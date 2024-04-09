<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'title',
        'parent_id',
        'route_name',
        'order',
        'icon',
        'created_at',
        'updated_at'
    ];

    public function children()
    {
        return $this->hasMany(Menus::class, 'parent_id');
    }
}