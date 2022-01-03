@extends('admin.layout.admaster')
@section('content')

    @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div> 
    @endif

    <div class="content-wrapper">
        @if (Session::has('myexcep'))
            @dump(Session::get('myexcep'));
        @endif
        {{-- !-- Content Header (Page header) --> --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1 class="">Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: white;" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Post</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                {{ Form::open(['method' => 'POST', 'route' => 'post.store', 'enctype' => 'multipart/form-data']) }}
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-primary"> 
                            <div class="card-header">
                                <h3 class="card-title">Add Post</h3>
                             

                            </div>
                            <div class="card-body">

                                <section>
                                    {{-- <div class="container">
                                        @if($errors->any())
                                        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                                    @endif
                                    </div> --}}
                                    <div class="container">
                                        {{ Form::hidden('id', !empty($fdata->id) ? $fdata->id : null) }}
                                        <!-- part-1 start  -->
                                        <div class="row first_part-1 ">
                                            <div class="col-12">
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('post_type', ' Post Type') }}
                                                {{ Form::text('post_type', !empty($fdata->post_type) ? $fdata->post_type : null, ['id' => 'post_type', 'class' => $errors->has('post_type') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Post Type']) }}
                                                @error('post_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    {{ Form::label('parent_id', 'parent_id') }}
                                                    {{-- {{ Form::select('parent_id', getMediaArr(), $fdata && $fdata->media ? $fdata->media->id : null, ['class' => $errors->has('parent_id') ? 'form-control myselect2  is-invalid' : 'form-control myselect2','placeholder' => 'Select Media Type']) }} --}}
                                                    {{ Form::text('parent_id', !empty($fdata->parent_id) ? $fdata->parent_id : null, ['id' => 'parent_id', 'class' => $errors->has('parent_id') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Parent']) }}
                                                    @error('parent_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Title') }}
                                                {{-- {{ Form::text('name', !empty($fdata->name) ? $fdata->name : null, ['id' => 'name', 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Name']) }} --}}
                                                {{ Form::text('title', !empty($fdata->title) ? $fdata->title : null, ['id' => 'title', 'class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Title']) }}
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('Slug', 'Slug') }}
                                                {{-- {{ Form::text('slug', !empty($fdata->slug) ? $fdata->slug : null, ['id' => 'slug', 'class' => $errors->has('slug') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Slug']) }} --}}
                                                {{ Form::text('slug', !empty($fdata->slug) ? $fdata->slug : null, ['id' => 'slug', 'class' => $errors->has('slug') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Slug']) }}
                                                @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('Categories', 'Categories') }}
                                                {{-- {{ Form::select('category_id[]', getCategoryArr(), $fdata && $fdata->categories ? $fdata->categories->pluck('id')->toArray() : null, ['class' => $errors->has('category_id') ? 'form-control myselect2  is-invalid' : 'form-control myselect2','multiple'=>'multiple']) }} --}}
                                                {{ Form::text('category_id', !empty($fdata->category_id) ? $fdata->category_id : null, ['id' => 'category_id', 'class' => $errors->has('category_id') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Category']) }}
                                                @error('category_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-6">
												<div class="form-group">
													{{ Form::label('release_date', 'Release Date') }}
													{{ Form::date('release_date', !empty($fdata->release_date) ? $fdata->release_date : null, ['id' => 'release_date', 'class' => $errors->has('release_date') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'release date']) }}
													@error('release_date')
													<span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
													@enderror
												</div>
											</div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('description', 'Description') }}
                                            {{-- {{ Form::textarea('description', !empty($fdata->description) ? $fdata->description : null, ['rows' => 3, 'placeholder' => 'Description..', 'class' => 'htmltexteditor form-control ' . ($errors->has('description') ? ' is-invalid' : '')]) }} --}}
                                            {{ Form::textarea('description', !empty($fdata->description) ? $fdata->description : null,  ['rows' => 8, 'placeholder' => 'Description..', 'class' => 'htmltexteditor form-control ' . ($errors->has('description') ? ' is-invalid' : '')]) }}
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('run_time', 'Runtime') }}
                                                {{-- {{ Form::text('run_time', !empty($fdata->run_time) ? $fdata->run_time : null, ['id' => 'name', 'class' => $errors->has('run_time') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Runtime']) }} --}}
                                                {{ Form::text('run_time', !empty($fdata->run_time) ? $fdata->run_time : null, ['id' => 'run_time', 'class' => $errors->has('run_time') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Runtime']) }}
                                                @error('run_time')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('link', 'Youtube Link') }}
                                                {{-- {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Youtube/Trailer Link']) }} --}}
                                                {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Youtube Link']) }}
                                                @error('link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            {{ Form::label('tag', 'Tag') }}
                                            {{-- {{ Form::select('tag_id[]', getTagArr(), $fdata && $fdata->tags ? $fdata->tags->pluck('id')->toArray() : null, ['class' => $errors->has('tag_id') ? 'form-control myselect2  is-invalid' : 'form-control myselect2','multiple'=>'multiple']) }} --}}
                                            {{ Form::text('tag_id', !empty($fdata->tag_id) ? $fdata->tag_id : null, ['id' => 'tag_id', 'class' => $errors->has('tag_id') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Tag']) }}
                                            @error('tag_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        <div class="row">
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('Country', 'Country Of Origin') }}
                                                {{-- {{ Form::select('country_origin', getCountryorigin(), !empty($fdata->country_origin) ? $fdata->country_origin : null, ['class' => $errors->has('country_origin') ? 'form-control myselect2 is-invalid' : 'form-control','placeholder' => 'Select Media Type']) }} --}}
                                                {{ Form::text('country_origin', !empty($fdata->country_origin) ? $fdata->country_origin : null, ['id' => 'country_origin', 'class' => $errors->has('country_origin') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Country Of Origin']) }}
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                {{ Form::label('language', 'Language') }}
                                                {{ Form::text('language', !empty($fdata->language) ? $fdata->language : null, ['id' => 'language', 'class' => $errors->has('language') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Language']) }}
                                                {{-- {{ Form::select('language', getlanguage(), $fdata->language,['class' =>  'form-control myselect2', 'placeholder' => 'Select Media Type']) }} --}}
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row film_part">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{ Form::label('news_location', 'post Locations') }}
                                                    {{ Form::text('news_location', !empty($fdata->news_location) ? $fdata->news_location : null, ['id' => 'news_location', 'class' => $errors->has('news_location') ? 'form-control is-invalid' : 'form-control','placeholder' => 'post Locations']) }}
                                                    {{-- {{ Form::select('news_location', getCountries(), $fdata->news_location,['class' =>  'form-control myselect2', 'multiple' => 'multiple']) }} --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- part-7 start -->
                                        {{-- <div class="row part-7-cs">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>
                                                            Moderator
                                                            <button @click='toggle.directors = !toggle.directors' type="button" class="btn btn-primary" style="float:right;">
                                                            <span v-if="!toggle.directors">Show</span>
                                                            <span v-else>Hide</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div class="card-body" id="part_7" v-if="toggle.directors">
                                                        <div class="row control-group" v-for="(input, i) in directors">
                                                            <div class="form-group col-lg-8">
                                                                {{ Form::label('name', 'Name') }}
                                                            @{{i}}
                                                            {{ Form::select(null, getPeopleArr(), $fdata && $fdata->people ? $fdata->people->pluck('name','id')->toArray() : null, ['class' => $errors->has('entity_id') ? 'form-control   is-invalid' : 'form-control ', 'placeholder' =>'Select A Name']) }}
                                
                                                                <div class="input-group mb-3">
                                                                    {{ Form::select(null, getPeopleArr(), $fdata && $fdata->people ? $fdata->people->pluck('id')->toArray() : null, ['class' => $errors->has('entity_id') ? 'form-control   is-invalid' : 'form-control ', 'placeholder' =>'Select A Name', 'v-model' => 'input.entity_id', ':name' => "'directors['+ input.id +'][entity_id]'",'required' => true]) }}
                                    
                                                                    <div class="input-group-append">
                                                                        <button @click="addInput(directors, input.id, 2)" class="btn btn-primary" type="button" v-if="i < 1">+Add</button>
                                                                        <button @click="remove(directors, input.id)" class="btn btn-danger" type="button" v-else>-Remove </button>
                                                                        @{{input.id}}
                                                                    </div>
                                                                </div>
                                                                <input :name="'directors['+ input.id +'][role_id]'" type="hidden" v-model="input.role_id" :key="i+'role'"/>
                                                                <input :name="'directors['+ input.id +'][character_name]'" type="hidden" v-model="input.character_name" :key="i+'character'"/>
                                                                <input :name="'directors['+ input.id +'][is_new]'" type="hidden" v-model="input.is_new" :key="i+'is_new'" v-if="input.is_new"/>
                                                                @error('entity_id')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row">
											<div class="form-group col-6">
												{!! Form::label('potraitimage', 'Potraitimage') !!}
												@isset($fdata->potraitimage)
													<div style="min-height: 100px">
														<img src="{{asset($fdata->potraitimage)}}" height="100px" width="auto" alt="">
													</div>
												@endisset
												{!! Form::file('potraitimage',  ['class' => 'form-control']) !!}
												@error('potraitimage')
												<span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
												@enderror
											</div>
											<div class="form-group col-6">
												{!! Form::label('landscapeimage', 'landscapeimage') !!}
												@isset($fdata->landscapeimage)
													<div style="min-height: 100px">
														<img src="{{asset($fdata->landscapeimage)}}" height="100px" width="auto" alt="">
													</div>
												@endisset
												{!! Form::file('landscapeimage',  ['class' => 'form-control']) !!}
												@error('landscapeimage')
												<span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
												@enderror
											</div>
										</div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
{{-- @push('customjs')
	<script>
        jQuery(document).ready(function($) {
            $('.myselect2').select2();
        });
        function ShowHide(self) {
            let id = $(self).data('id');
            let name = $(self).text();
            $(self).closest('.card').find('.card-body').toggleClass('hide');

            if (name == 'Show') {
                $(self).html('Hide');
            }
            if (name == 'Hide') {
                $(self).html('Show');
            }
        }
        Vue.component('v-select', VueSelect.VueSelect);
        // let entities = {{json_encode(getPeopleArr())}};
        // let directors         =  {!! json_encode($directors) !!};
        // let role              =  {!! json_encode($role) !!};
        new Vue({
            el: '#app',
            data: {
                inputs: [{}],
                directors: directors,
                role: role,
                toggle: {'directors': true, 'role': role[0].role_id,},
                options: []
            },
            methods: {
                addInput(array, id, role_id) {
                    let last = array.slice(-1).pop();
                    array.push({'id': last.id+1,  'role_id': role_id, 'is_new': true});
                },
                remove(array, value) {
                    //let index = array.indexOf(value);
                    let index = array.map((el) => el.id).indexOf(value);
                    //pos = entity_type.findIndex(x => x.id === i)
                    if (index > -1) {
                        //alert('Im here');
                        array.splice(index, 1);
                    }
                },
            },
            //name to slug and make every word upper
            mounted() {
                var name = document.getElementById("name");
                var slug = document.getElementById("slug");
                name.addEventListener("change", function () {
                    slug.value = name.value.toLowerCase().replaceAll(" ", "-");
                    name.value = name.value.toLowerCase().split(' ').map(s => s.charAt(0).toUpperCase() + s.substring(1)).join(' ');
                });
            },

        })
	</script>
@endpush --}}