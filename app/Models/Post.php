<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    protected $fillable = [
        'title', 'subtitle', 'content_raw', 'meta_description','layout',/* 'published_at', */
    ];

    
    /**
     * 返回 published_at 字段的日期部分
     */
    /* public function getPublishDateAttribute($value)
    {
        return $this->published_at->format('Y-m-d');
    } */

    /**
     * 返回 published_at 字段的时间部分
     */
     /* public function getPublishTimeAttribute($value)
    {
        return $this->published_at->format('g:i A');
    } */ 

    /**
     * content_raw 字段别名
     */
    public function getContentAttribute($value)
    {
        return $this->content_raw;
    }
    //按照教程将标题slug化以美化url
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }
 
}