<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;

class cmsPage extends Model
{

    function cms_articles()
    {
        return $this->hasMany('LaravelExamples\cmsArticle');
    }
}
