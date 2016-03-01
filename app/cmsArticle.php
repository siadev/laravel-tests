<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;

class cmsArticle extends Model
{
    function cmsPage()
    {
        return $this->belongsTo('LaravelExamples\cmsPage');
    }
}
