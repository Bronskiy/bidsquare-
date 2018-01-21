<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\TestTest1;
use App\Http\Requests\CreateTestTest1Request;
use App\Http\Requests\UpdateTestTest1Request;
use Illuminate\Http\Request;



class TestTest1Controller extends Controller {

	/**
	 * Display a listing of testtest1
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $testtest1 = TestTest1::all();

		return view('admin.testtest1.index', compact('testtest1'));
	}

	/**
	 * Show the form for creating a new testtest1
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.testtest1.create');
	}

	/**
	 * Store a newly created testtest1 in storage.
	 *
     * @param CreateTestTest1Request|Request $request
	 */
	public function store(CreateTestTest1Request $request)
	{
	    
		TestTest1::create($request->all());

		return redirect()->route(config('quickadmin.route').'.testtest1.index');
	}

	/**
	 * Show the form for editing the specified testtest1.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$testtest1 = TestTest1::find($id);
	    
	    
		return view('admin.testtest1.edit', compact('testtest1'));
	}

	/**
	 * Update the specified testtest1 in storage.
     * @param UpdateTestTest1Request|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTestTest1Request $request)
	{
		$testtest1 = TestTest1::findOrFail($id);

        

		$testtest1->update($request->all());

		return redirect()->route(config('quickadmin.route').'.testtest1.index');
	}

	/**
	 * Remove the specified testtest1 from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		TestTest1::destroy($id);

		return redirect()->route(config('quickadmin.route').'.testtest1.index');
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
            TestTest1::destroy($toDelete);
        } else {
            TestTest1::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.testtest1.index');
    }

}
