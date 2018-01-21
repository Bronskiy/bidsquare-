<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'test';
    
    protected $fillable = [
          'photo_field_test',
          'file_field_test',
          'long_no_ck_test',
          'long_ck_test'
    ];
    

    public static function boot()
    {
        parent::boot();

        Test::observe(new UserActionsObserver);
    }
    
    
    
    
}