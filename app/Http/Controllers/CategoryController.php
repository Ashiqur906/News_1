<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $Categories = Category::orderBy('id', 'desc')->paginate(5);
        return view('admin.pages.category.list', compact('categories'));
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
        $fdata    = Category::findOrfail($id);

        return view('admin.pages.category.create')->with([
            'fdata'     => $fdata,
            'mdata'     => null
        ]);
    }
    public function store(CategoryFv $request)
    {

        $id = $request->get('id');
        $atttributes = [
            'name' => $request->get('name')
        ];
        try {
            if ($id) {
                $data = Category::where('id', $id)->update($atttributes);
                $abledata = [
                    'data'      => $request,
                    'able_id'   => $id,
                    'able_type' => Category::class,
                ];
                $this->seoPost($abledata);
            } else {
                $data = Category::create($atttributes);
                $abledata = [
                    'data'      => $request,
                    'able_id'   => $data->id,
                    'able_type' => Category::class,
                ];
                $this->seoPost($abledata);
            }
            return redirect()->route('category.index')->with("Success", "Successfully save changed");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->withErrors($ex->getMessage())
                ->with('myexcep', $ex->getMessage())->withInput();
        }
    }
    public function Seogenarate($request)
    {
        $attributes = [
            'meta_title'        => $request->get('meta_title'),
            'meta_description'  => $request->get('meta_description'),
            'meta_keywords'     => $request->get('meta_keywords'),
            'canonical_tag'     => $request->get('canonical_tag'),
            'meta_type'         => $request->get('meta_type'),
            'meta_image'        => $request->get('meta_image'),
            'remarks'           => $request->get('remarks'),
            'sort_by'           => $request->get('sort_by'),
            'is_active'         => $request->get('is_active') ? $request->get('is_active') : 'No',
            'modified_by'       => auth('web')->user()->id,
        ];
        $id     = $request->get('id');
        $seo_id = $request->get('seo_id');
        if (!$id) {
            // $attributes['created_by']  = auth('web')->user()->id;
        }

        //dump($id);
        if ($seo_id) {
            $existing = Seo::findOrFail($seo_id);
            $data     =  Seo::where('id', $existing->id)->update($attributes);
            return $seo_id;
        } else {
            $data =  Seo::create($attributes);
            return $data->id;
        }

        return null;
    }
    public function delete($id)
    {
        //    dd($id);
        $category = Category::where('id', $id)->delete();
        return redirect('admin/category')->with('success', 'category has deleted successfully.');
    }
     
}
