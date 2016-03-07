<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    protected $table = 'flyers_photos';

    protected $fillable = ['path'];

    protected $baseDir = 'uploaded/photos';  // _review not in use yet

    public static function fromForm(UploadedFile $file)
    {
        $photo = new static;
        $name_mod = time() . '_' . $file->getClientOriginalName();

        // could use: $photo->path = $photo->baseDir . '/' . $name_mod
        $photo->path = $name_mod;

        $file->move($photo->baseDir, $name_mod); // should be in controller

        return $photo;
    }

    public function flyer()
    {
        return $this->belongsTo('LaravelExamples\Flyer');
    }
}
