<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class HomeMenu extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'homemenu';
    
    protected $fillable = [
          'menu_title',
          'menu_link',
          'menu_order'
    ];
    

    public static function boot()
    {
        parent::boot();

        HomeMenu::observe(new UserActionsObserver);
    }
    
    
    
    
}