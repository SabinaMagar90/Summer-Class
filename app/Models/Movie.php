<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
    'name',
    'description',
    'duration',
    'release_date',
    'rating',
    'genre_id',
    'language',
    'cast',
    'image'
];

public function genre()
{
    return $this->belongsTo(Genre::class);
}


public function scopeFilterSearch($query)
{
    if($search = request('search')) {
        $query->where('name', 'like', '%'.request('search').'%')
              ->orWhere('description', 'like', '%'.$search.'%')
              ->orWhereHas('genre', function ($qa) use ($search){
                    $qa->where('name', 'like', '%'.$search.'%');
              });

    }
    return $query;
}

public function scopeFilterGenre($query)
{
    if($genreId = request('genre_id')) {
        $query->where('genre_id', $genreId);
    }
    return $query;
}



}
