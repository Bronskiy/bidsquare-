<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\TEEddsSd;
use App\Http\Requests\CreateTEEddsSdRequest;
use App\Http\Requests\UpdateTEEddsSdRequest;
use Illuminate\Http\Request;



class TEEddsSdController extends Controller {

	/**
	 * Display a listing of teeddssd
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $teeddssd = TEEddsSd::all();

		return view('admin.teeddssd.index', compact('teeddssd'));
	}

	/**
	 * Show the form for creating a new teeddssd
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.teeddssd.create');
	}

	/**
	 * Store a newly created teeddssd in storage.
	 *
     * @param CreateTEEddsSdRequest|Request $request
	 */
	public function store(CreateTEEddsSdRequest $request)
	{
	    
		TEEddsSd::create($request->all());

		return redirect()->route(config('quickadmin.route').'.teeddssd.index');
	}

	/**
	 * Show the form for editing the specified teeddssd.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$teeddssd = TEEddsSd::find($id);
	    
	    
		return view('admin.teeddssd.edit', compact('teeddssd'));
	}

	/**
	 * Update the specified teeddssd in storage.
     * @param UpdateTEEddsSdRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTEEddsSdRequest $request)
	{
		$teeddssd = TEEddsSd::findOrFail($id);

        

		$teeddssd->update($request->all());

		return redirect()->route(config('quickadmin.route').'.teeddssd.index');
	}

	/**
	 * Remove the specified teeddssd from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		TEEddsSd::destroy($id);

		return redirect()->route(config('quickadmin.route').'.teeddssd.index');
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
            TEEddsSd::destroy($toDelete);
        } else {
            TEEddsSd::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.teeddssd.index');
    }

}
