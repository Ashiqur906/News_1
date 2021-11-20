<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFV;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
	    $queryWhere = [];
	    $per_page = 5;
	    if($request->id) {
	    	$queryWhere['id'] = $request->id;
	    }
	    if($request->media_type) {
	    	$queryWhere['media_type'] = $request->media_type;
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
	    if($request->release_date) {
		    $queryWhere['release_date'] = $request->release_date;
	    }

        $posts = Post::where($queryWhere)->paginate($per_page);
        return view('admin.pages.post.list', compact('posts','request'));
    }

    public function add()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $role = Role::orderBy('sort_by', 'ASC')->get();
        $people = Entity::orderBy('id', 'desc')->get();
        $category = Categoty2::orderBy('id', 'desc')->get();
        $fdata = new Post();
        // dd($role);

        // $category = Category::orderBy('id', 'desc')->get();
        return view('admin.pages.post.create')->with([
            'fdata'             => $fdata,
            'mdata'             => null,
            'category'          => $category,
            'people'            => $people,
            'post'              => $post,
            'role'              => $role,
            'add_by'            => $fdata->getEntitiesByRole(1),
        ]);
        //return view('admin.pages.movie.create', compact('category'));
    }

    public function edit($id, Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $fdata    = Post::findOrfail($id);
        $category = Categoty2::orderBy('id', 'desc')->get();
        $role = Role::orderBy('id', 'desc')->get();
        $people = Entity::orderBy('id', 'desc')->get();
        return view('admin.pages.post.create')->with([
            'fdata'             => $fdata,
            'category'          => $category,
            'post'              => $post,
            'role'              => $role,
            'people'            => $people,
            'add_by'             => $fdata->getEntitiesByRole(1),
        
        ]);

        //return view('admin.pages.movie.edit', $data);
    }
    public function store(PostFV $request)
    {
        // return $request;
        // return $request;
        $id = $request->get('id');
        $attributes = [
            'title'                 => $request->get('title'),
            'slug'                  => $request->get('slug'),
            'description'           => $request->get('description'),
            'link'                  => $request->get('link'),
            'parent_id'             => $request->get('parent_id'),
            'post_type'             => $request->get('post_type'),
            'ratings'               => $request->get('ratings'),
            'run_time'              => $request->get('run_time'),
            'release_date'          => $request->get('release_date'),
            'remarks'               => $request->get('remarks'),
            'sort_by'               => $request->get('sort_by'),
            'language'              => $request->get('language'),
            'news_location'         => $request->get('news_location'),
            'country_origin'        => $request->get('country_origin'),
            'is_active'             => $request->get('is_active') ? $request->get('is_active') : 'No',
            'modified_by'           => auth()->user()->id,
        ];

        if (!$id) {
            $attributes['create_by']  = auth()->user()->id;
        }

        if ($request->hasFile('potraitimage')) {
            // dd($request);
            $photo  = rand() . $request->file('potraitimage')->getClientOriginalName();
            $destination  = 'uploads/postImageP';
            $request->file('potraitimage')->move($destination, $photo);
            $attributes['potraitimage']   = $destination . '/' . $photo;
        }
        if ($request->hasFile('landscapeimage')) {
            // dd($request);
            $photo  = rand() . $request->file('landscapeimage')->getClientOriginalName();
            $destination  = 'uploads/postImageL';
            $request->file('landscapeimage')->move($destination, $photo);

            $attributes['landscapeimage']   = $destination . '/' . $photo;
        }
        try {
            if ($id) {
                $existing = Post::findOrFail($id);
                $sumbit =  Post::where('id', $id)->update($attributes);

                $entities = $this->mergeArrays(
                    $request->casts,
                    // $request->producers,
                    // $request->directors,
                    // $request->writers,
                    // $request->musicians,
                    // $request->cinematographers,
                    // $request->distributors,
                    // $request->screenplay
                );
                // dd([$request->request, $entities]);
                $existing->entity()->sync($entities);
                $existing->categories()->sync($request->category_id);
                $existing->tags()->sync($request->tag_id);
                $abledata = [
                    'data' => $request,
                    'able_id' => $id,
                    'able_type' => Post::class,
                ];
                // $this->seoPost($abledata);
            } else {

                $insert = Post::create($attributes);
                $abledata = [
                    'data' => $request,
                    'able_id' => $insert->id,

                    'able_type' => Post::class,
                ];

                // $this->seoPost($abledata);
                // $entities = $this->mergeArrays(
                //     $request->casts, 
                //     $request->producers,
                //     $request->directors,
                //     $request->writers,
                //     $request->musicians,
                //     $request->cinematographers,
                //     $request->distributors,
                //     $request->screenplay
                // );
                //dd([$request->request, $entities]);
                $insert->entity()->sync($entities);
                $insert->categories()->sync($request->category_id);
                $insert->tags()->sync($request->tag_id);
            }
            return redirect()->route('admin.pages.post.list')->with("Success", "Successfully save changed");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
    }


    private function mergeArrays()
    {
        $args = func_get_args();
        $merged = $new = [];
        foreach ($args as $arr) {
            if (is_array($arr)) {
                foreach ($arr as $k => $v) {
                    // preserve the keys of previous array
                    if (is_array($v)) {
                        if (isset($v['is_new'])) {
                            if ($v['is_new']) {
                                unset($v['is_new']);
                                $new[] = $v;
                            } else {
                                unset($v['is_new']);
                                $merged[$k] = $v;
                            }
                        } else {
                            unset($v['is_new']);
                            $merged[$k] = $v;
                        }
                    }
                }
            }
        }
        // If new data is added
        if (!empty($new)) {
            foreach ($new as $na) {
                $merged[] = $na;
            }
        }
        return $merged;
    }

    public function delete($id)
    {
        $posts = Post::findOrfail($id);
        if (!is_null($posts)) {
            //Delete Image
            if (File::exists($posts->potraitimage, $posts->landscapeimage)) {
                File::delete($posts->potraitimage,$posts->landscapeimage);
            }
            $posts->delete();
        }
        return redirect('/admin/post')->with("success", "Post deleted successfully.");
    }
}
