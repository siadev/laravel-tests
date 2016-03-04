<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;

class cmsTemplate extends Model
{
    function pages()
    {
        return $this->hasMany('LaravelExamples\cmsPage', 'template_id');
    }
}
