<?php

namespace App\Http\Controllers;


use App\Http\Requests\RoleFV;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
	    $queryWhere = [];
	    $per_page = 5;
	    if($request->id) {
	    	$queryWhere['id'] = $request->id;
	    }
	    if($request->title) {
	    	$queryWhere[] = ['title', 'LIKE', '%'.$request->title.'%'];
	    }
        if($request->name) {
	    	$queryWhere[] = ['name', 'LIKE', '%'.$request->name.'%'];
	    }
	    if($request->per_page) {
	    	$per_page = $request->per_page;
	    }

        $roles = Role::where($queryWhere)->paginate($per_page);
        return view('admin.pages.role.list', compact('roles','request'));
    }

    public function add()
    {   

        return view('admin.pages.role.create')->with([
            'fdata' => null,
            'mdata' => null
        ]);
    }

    public function edit($id, Request $request)
    {
        $fdata    = Role::findOrfail($id);
        return view('admin.pages.role.create')->with([
            'fdata'     => $fdata,
            'mdata'     => null
        ]);
    }
    public function store(RoleFV $request)
    {   

        // return $request;
        $id = $request->get('id');
        $atttributes = [
            'name' => $request->get('name'),
            'title' => $request->get('title')
        ];

        try {
            if ($id) {
                $data = Role::where('id', $id)->update($atttributes);
            } else {
                $date = Role::create($atttributes);
            }
            return redirect()->route('admin.pages.role.list')->with("Success", "Successfully save changed");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
    }

    public function delete($id)
    {
        //    dd($id);
        $roles = Role::where('id', $id)->delete();
        return redirect('admin/role')->with('success', 'role has deleted successfully.');
    }
}

