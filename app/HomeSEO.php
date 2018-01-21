<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSEO extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'homeseo';
    
    protected $fillable = [
          'meta_title',
          'meta_description',
          'meta_keywords'
    ];
    

    public static function boot()
    {
        parent::boot();

        HomeSEO::observe(new UserActionsObserver);
    }
    
    
    
    
}