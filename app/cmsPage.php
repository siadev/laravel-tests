<?php

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;

class cmsPage extends Model
{
    protected $fillable = [

];

    /*
     *  _doc calling model array classes
     *
     *  $var = new cmsPage;
     *  $var->articles->first();
     *  ~> in this statement the collection fills articles then displays the first record.
     *
     *  $var->articles->first();
     *  ~> in this statement the query finds the first article belonging
     *     to this page without filling the collection of articles for this page.
     *
     *  _doc display sql statement that Laravel is using
     *  DB::listen(function($query) {var_dump($query->sql); });
     * */
    function template()
    {
        return $this->belongsTo('LaravelExamples\cmsTemplate', 'template_id');
    }

    function articles()
    {
        return $this->hasMany('LaravelExamples\cmsArticle', 'page_id');
    }
}
