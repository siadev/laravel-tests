<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'flyers_photos';

    protected $fillable = ['path'];

    public function flyer()
    {
        return $this->belongsTo('LaravelExamples\Flyer');
    }
}
