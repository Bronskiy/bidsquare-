<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\HomeSEO;
use App\Http\Requests\CreateHomeSEORequest;
use App\Http\Requests\UpdateHomeSEORequest;
use Illuminate\Http\Request;



class HomeSEOController extends Controller {

	/**
	 * Display a listing of homeseo
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $homeseo = HomeSEO::all();

		return view('admin.homeseo.index', compact('homeseo'));
	}

	/**
	 * Show the form for creating a new homeseo
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.homeseo.create');
	}

	/**
	 * Store a newly created homeseo in storage.
	 *
     * @param CreateHomeSEORequest|Request $request
	 */
	public function store(CreateHomeSEORequest $request)
	{
	    
		HomeSEO::create($request->all());

		return redirect()->route(config('quickadmin.route').'.homeseo.index');
	}

	/**
	 * Show the form for editing the specified homeseo.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$homeseo = HomeSEO::find($id);
	    
	    
		return view('admin.homeseo.edit', compact('homeseo'));
	}

	/**
	 * Update the specified homeseo in storage.
     * @param UpdateHomeSEORequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateHomeSEORequest $request)
	{
		$homeseo = HomeSEO::findOrFail($id);

        

		$homeseo->update($request->all());

		return redirect()->route(config('quickadmin.route').'.homeseo.index');
	}

	/**
	 * Remove the specified homeseo from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		HomeSEO::destroy($id);

		return redirect()->route(config('quickadmin.route').'.homeseo.index');
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
            HomeSEO::destroy($toDelete);
        } else {
            HomeSEO::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.homeseo.index');
    }

}
