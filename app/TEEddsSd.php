<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class TEEddsSd extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'teeddssd';
    
    protected $fillable = ['TEEdds Sd'];
    

    public static function boot()
    {
        parent::boot();

        TEEddsSd::observe(new UserActionsObserver);
    }
    
    
    
    
}