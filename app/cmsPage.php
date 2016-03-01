<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;

class cmsPage extends Model
{

    function cmsTemplate()
    {
        return $this->belongsTo('LaravelExamples\cmsTemplate');
    }

    function cmsArticle()
    {
        return $this->hasMany('LaravelExamples\cmsArticle');
    }
}
