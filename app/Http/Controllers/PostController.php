<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::orderBy('id', 'desc')->paginate(5);
        return view('admin.pages.post.list', compact('post'));
    }

    public function add()
    {
        $movie = Post::orderBy('id', 'desc')->get();
        $role = Role::orderBy('sort_by', 'ASC')->get();
        $people = Entity::orderBy('id', 'desc')->get();
        $category = Category::orderBy('id', 'desc')->get();
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
        $post = Post::orderBy('id', 'desc')->get();
        $fdata    = Post::findOrfail($id);
        $category = Category::orderBy('id', 'desc')->get();
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
    public function store(MediaFv $request)
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
                $sumbit =  Media::where('id', $id)->update($attributes);

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
                    'able_type' => Media::class,
                ];
                // $this->seoPost($abledata);
            } else {

                $insert = Media::create($attributes);
                $abledata = [
                    'data' => $request,
                    'able_id' => $insert->id,

                    'able_type' => Media::class,
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
        $post = Media::findOrfail($id);
        if (!is_null($post)) {
            //Delete Image
            if (File::exists($post->potraitimage, $post->landscapeimage)) {
                File::delete($post->potraitimage, $post->landscapeimage);
            }
            $post->delete();
        }
        return redirect('/admin/post')->with("success", "Post deleted successfully.");
    }
}
