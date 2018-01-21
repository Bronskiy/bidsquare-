<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
use App\HomeSEO;
use App\HomeMenu;

class HomeController extends Controller
{
  public function getData()
  {
    $data['HomePageData'] = HomePage::all();
    $data['SeoData'] = HomeSEO::all();
    $data['HomeMenuData'] = HomeMenu::all();
    return view('pages.home',$data);
  }

}
