<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'description'];

    public function scopeFilter($query, array $filter) 
    {
        // dd($filter['tag']);
        if($filter['name'] ?? false) {
            $query->where('name', 'like', '%' . request('name') .'%');
        }
        if($filter['description'] ?? false) {
            $query->where('description', 'like', '%' . request('description') .'%');
        }
        if($filter['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') .'%')
            ->orWhere('description', 'like', '%' . request('search') .'%');
        }
    }
}
