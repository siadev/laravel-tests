<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;

class cmsArticle extends Model
{
    function page()
    {
        return $this->belongsTo('LaravelExamples\cmsPage', 'page_id');
    }

    function user()
    {
        return $this->belongsTo('LaravelExamples\User', 'user_id');
    }
}
