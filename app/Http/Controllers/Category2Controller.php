<?php

namespace App\Http\Controllers;
use App\Models\Categoty2;
use App\Http\Requests\CategoryFV;
use Illuminate\Http\Request;


class Category2Controller extends Controller
{
    public function index(Request $request)
    {
	    $queryWhere = [];
	    $per_page = 5;
	    if($request->id) {
	    	$queryWhere['id'] = $request->id;
	    }
	    if($request->name) {
	    	$queryWhere[] = ['name', 'LIKE', '%'.$request->name.'%'];
	    }
        if($request->name) {
	    	$queryWhere[] = ['name', 'LIKE', '%'.$request->name.'%'];
	    }
	    if($request->per_page) {
	    	$per_page = $request->per_page;
	    }
        // $categoty2s = Categoty2::orderBy('id', 'desc')->paginate(5);

        $categoty2s = Categoty2::where($queryWhere)->paginate($per_page);
        return view('admin.pages.category.list', compact('categoty2s','request'));
    }

    public function add()
    {
        return view('admin.pages.category.create')->with([

            'fdata' => null,
            'mdata' => null
        ]);
    }
    public function edit($id, Request $request)
    {
        $fdata    = Categoty2::findOrfail($id);

        return view('admin.pages.category.create')->with([
            'fdata'     => $fdata,
            'mdata'     => null
        ]);
    }
    public function store(CategoryFV $request)
    {

        $id = $request->get('id');

        $atttributes = [
            'name' => $request->get('name')

        ];
        try {
            if ($id) {
                $data = Categoty2::where('id', $id)->update($atttributes);
            
            } else {
                $data = Categoty2::create($atttributes);
            }
            return redirect()->route('admin.pages.category.list')->with("Success", "Successfully save changed");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
    }

    public function delete($id)
    {
        //    dd($id);
        $category = Categoty2::where('id', $id)->delete();
        return redirect('admin/category')->with('success', 'category has deleted successfully.');
    }
     

}