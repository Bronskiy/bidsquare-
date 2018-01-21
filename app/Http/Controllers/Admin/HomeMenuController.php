<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\HomeMenu;
use App\Http\Requests\CreateHomeMenuRequest;
use App\Http\Requests\UpdateHomeMenuRequest;
use Illuminate\Http\Request;



class HomeMenuController extends Controller {

	/**
	 * Display a listing of homemenu
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $homemenu = HomeMenu::all();

		return view('admin.homemenu.index', compact('homemenu'));
	}

	/**
	 * Show the form for creating a new homemenu
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.homemenu.create');
	}

	/**
	 * Store a newly created homemenu in storage.
	 *
     * @param CreateHomeMenuRequest|Request $request
	 */
	public function store(CreateHomeMenuRequest $request)
	{
	    
		HomeMenu::create($request->all());

		return redirect()->route(config('quickadmin.route').'.homemenu.index');
	}

	/**
	 * Show the form for editing the specified homemenu.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$homemenu = HomeMenu::find($id);
	    
	    
		return view('admin.homemenu.edit', compact('homemenu'));
	}

	/**
	 * Update the specified homemenu in storage.
     * @param UpdateHomeMenuRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateHomeMenuRequest $request)
	{
		$homemenu = HomeMenu::findOrFail($id);

        

		$homemenu->update($request->all());

		return redirect()->route(config('quickadmin.route').'.homemenu.index');
	}

	/**
	 * Remove the specified homemenu from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		HomeMenu::destroy($id);

		return redirect()->route(config('quickadmin.route').'.homemenu.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            HomeMenu::destroy($toDelete);
        } else {
            HomeMenu::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.homemenu.index');
    }

}
