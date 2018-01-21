<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class HomePage extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'homepage';
    
    protected $fillable = [
          'slider_title',
          'slider_text',
          'main_section',
          'secondary_section',
          'facebook_link',
          'twitter_link',
          'linkedin_link',
          'email',
          'phone',
          'error_404_title',
          'error_404_text'
    ];
    

    public static function boot()
    {
        parent::boot();

        HomePage::observe(new UserActionsObserver);
    }
    
    
    
    
}