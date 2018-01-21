<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class TestTest1 extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'testtest1';
    
    protected $fillable = ['test test 1'];
    

    public static function boot()
    {
        parent::boot();

        TestTest1::observe(new UserActionsObserver);
    }
    
    
    
    
}