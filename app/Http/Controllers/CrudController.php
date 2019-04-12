<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudController extends Controller
{
    public function index(){

		return view('crud');
    }
    public function store(Request $request){

    	$crud = new Crud;
	    $crud->name = $request->name;
	    $crud->address = $request->address;
	    $crud->phone = $request->phone;
	    $crud->image = $request->image;
	   // $crud->user_id = $request->user_id;
	    $crud->save();


	    return redirect()->route('view');
	}
	public function view(){

		$cruds = Crud::all();

		return view('view', compact('cruds'));

	}

	public function edit($id){

		$crud = Crud::find($id);

		return view('edit', compact('crud'));

	}

	public function edit_save(Request $request, $id){

		$crud = Crud::find($id);

		$crud->name = $request->name;
	    $crud->address = $request->address;
	    $crud->phone = $request->phone;
	    $crud->image = $request->image;
	   // $crud->user_id = $request->user_id;
	    $crud->save();

	    return redirect()->route('crud');


	}
	public function delete($id){

		$crud = Crud::find($id);

		$crud->delete();

        return redirect('crud/view');
	}


}
