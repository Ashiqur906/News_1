<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersFV;
use App\Models\Users;
use App\Models\Role;
use Illuminate\Http\Request;

class UsersController extends Controller
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
        // $Users = Entity::orderBy('id', 'desc')->paginate(5);
        $Users = Users::where($queryWhere)->paginate($per_page);
        return view('admin.pages.users.list', compact('Users','request'));
    }

    public function add()
    {
        $role   = Role::orderBy('id', 'desc')->get();
        $Users = Users::orderBy('id', 'desc')->get();
        
        return view('admin.pages.users.create')->with([
            'role'   => $role,
            'users' => $Users,
            'fdata'  => new Users(),
            'mdata'  => null
        ]); 
    }
    public function teamAdd()
    {
        $role   = Role::orderBy('id', 'desc')->get();
        $Users = Users::orderBy('id', 'desc')->get();
        return view('admin.pages.users.add')->with([ 
            'role'   => $role,
            'users' => $users,
            'fdata'  => new Users(),
            'mdata'  => null
        ]);
    }
    public function edit(Request $request, $id)
    {  

       
        if (strlen($id) == 0) {
            return redirect()->back()->withErrors('No Profile id found');
        }

        $fdata = Users::findOrfail($id);

        return view('admin.pages.users.create')->with([
            'fdata' => $fdata,
            'mdata' => null
        ]);
    }
    public function store(UsersFV $request)
    {  
        // return $request;
        //  dd($request->hasFile('image'));git 
        $id = $request->get('id');
     
        $attributes = [
            'name'          => $request->get('name'),
            'slug'          => $request->get('slug'),
            'description'   => $request->get('description'),
            'company'       => $request->get('company'),
            'dob'           => $request->get('dob'),
            'dead'          => $request->get('dead'),
            'years_active'  => $request->get('years_active'),
            'gender'        => $request->get('gender'),
            'remarks'       => $request->get('remarks'),
            'sort_by'       => $request->get('sort_by'),
            'is_active'     => $request->get('is_active') ? $request->get('is_active') : 'No',
            'modified_by'   => auth()->user()->id,
        ];
        if (!$id) {
            $attributes['create_by']  = auth()->user()->id;
        }
     
       
        try {
            if ($id) {
                $existing = Users::findOrFail($id);
                if ($request->hasFile('image')) {
                    if (File::exists($existing->image)) {
                        File::delete($existing->image);
                    }
                    // dd($request);
                    $photo                  = $request->file('image')->getClientOriginalName();
                    $destination            = 'uploads/profile';
                    $request->file('image')->move($destination, $photo);
                    $attributes['image']    = $destination . '/' . $photo;
                 
                }
             
             
                $sumbit =  Users::where('id', $id)->update($attributes);
                $existing->roles()->sync($request->role_id);
                $abledata = [
                    'data'      => $request,
                    'able_id'   => $id,
                    'able_type' => Users::class,
                ];
                $this->seoPost($abledata);
            } else {

                if ($request->hasFile('image')) {
                    $photo                  = $request->file('image')->getClientOriginalName();
                    $destination            = 'uploads/profile';
                    $request->file('image')->move($destination, $photo);
                    $attributes['image']    = $destination . '/' . $photo;
                 
                }
                $insert = Users::create($attributes);
                $insert->roles()->sync($request->role_id);
                $abledata = [
                    'data'      => $request,
                    'able_id'   => $insert->id,
                    'able_type' => Users::class,
                ];
                $this->seoPost($abledata);
            }
            return redirect()->route('users.index')->with("Success", "Successfully save changed");
        } catch (\Illuminate\Database\QueryException $ex) {

            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
    }
    
    public function delete($id)
    {
        $users = Users::find($id);
        if (!is_null($Users)) {
            //Delete Image
            if (File::exists($users->image)) {
                File::delete($users->image);
            }
            $users->delete();
        }
        return redirect('admin/users')->with("success", "users deleted successfully.");
    }
}
