<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title', 'description', 'link',
    ];

    function category() {
        return $this->belongsTo(Category::class);
    }

    function youtubePreview() {
        return '//img.youtube.com/vi/' . substr($this->link, 17) . '/maxresdefault.jpg';
    }
}
