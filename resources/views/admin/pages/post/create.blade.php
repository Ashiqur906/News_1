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
                                    <div class="container">
                                    {{ Form::hidden('id', !empty($fdata->id) ? $fdata->id : null) }}
                                    <!-- part-1 start  -->
                                    <div class="row first_part-1 ">
                                        <div class="col-12">
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('media_type', ' Media Type') }}
                                            {{ Form::select('media_type', getMediaTypes(), !empty($fdata->media_type) ? $fdata->media_type : null, ['class' => $errors->has('media_type') ? 'form-control myselect2 is-invalid' : 'form-control','placeholder' => 'Select Media Type']) }}
                                            @error('media_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('parent', 'Parent') }}
                                            {{ Form::select('parent_id', getMediaArr(), $fdata && $fdata->media ? $fdata->media->id : null, ['class' => $errors->has('parent_id') ? 'form-control myselect2  is-invalid' : 'form-control myselect2','placeholder' => 'Select Media Type']) }}
                    
                                            @error('parent_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('name', 'Name') }}
                                            {{ Form::text('name', !empty($fdata->name) ? $fdata->name : null, ['id' => 'name', 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Name']) }}
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('Slug', 'Slug') }}
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
                                            {{ Form::select('category_id[]', getCategoryArr(), $fdata && $fdata->categories ? $fdata->categories->pluck('id')->toArray() : null, ['class' => $errors->has('category_id') ? 'form-control myselect2  is-invalid' : 'form-control myselect2','multiple'=>'multiple']) }}
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
                                        {{ Form::textarea('description', !empty($fdata->description) ? $fdata->description : null, ['rows' => 3, 'placeholder' => 'Description..', 'class' => 'htmltexteditor form-control ' . ($errors->has('description') ? ' is-invalid' : '')]) }}
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
                                            {{ Form::text('run_time', !empty($fdata->run_time) ? $fdata->run_time : null, ['id' => 'name', 'class' => $errors->has('run_time') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Runtime']) }}
                                            @error('run_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('link', 'Youtube/Trailer Link') }}
                                            {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Youtube/Trailer Link']) }}
                                            @error('link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('cinebazurl', 'Cinebaz Link') }}
                                            {{ Form::text('cinebazurl', !empty($fdata->cinebazurl) ? $fdata->cinebazurl : null, ['id' => 'cinebazurl', 'class' => $errors->has('cinebazurl') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Cinebaz Link']) }}
                                            @error('cinebazurl')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('budget', 'Budget') }}
                                            {{ Form::text('budget', !empty($fdata->budget) ? $fdata->budget : null, ['id' => 'budget', 'class' => $errors->has('budget') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Budget']) }}
                                            @error('budget')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('box_office', 'Box-Office') }}
                                            {{ Form::text('box_office', !empty($fdata->box_office) ? $fdata->box_office : null, ['id' => 'box_office', 'class' => $errors->has('box_office') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Box Office']) }}
                                            @error('box_office')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        {{ Form::label('tag', 'Tag') }}
                                        {{ Form::select('tag_id[]', getTagArr(), $fdata && $fdata->tags ? $fdata->tags->pluck('id')->toArray() : null, ['class' => $errors->has('tag_id') ? 'form-control myselect2  is-invalid' : 'form-control myselect2','multiple'=>'multiple']) }}
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
                                            {{ Form::select('country_origin', getCountryorigin(), !empty($fdata->country_origin) ? $fdata->country_origin : null, ['class' => $errors->has('country_origin') ? 'form-control myselect2 is-invalid' : 'form-control','placeholder' => 'Select Media Type']) }}
                    
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('language', 'Language') }}
                                            {{ Form::select('language', getlanguage(), $fdata->language,['class' =>  'form-control myselect2', 'placeholder' => 'Select Media Type']) }}
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row film_part">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            {{ Form::label('filming_location', 'Filming Locations') }}
                                            {{ Form::select('filming_location', getCountries(), $fdata->filming_location,['class' =>  'form-control myselect2', 'multiple' => 'multiple']) }}
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            {{ Form::label('sound_mix', 'Sound Mix') }}
                                            {{ Form::text('sound_mix', !empty($fdata->sound_mix) ? $fdata->sound_mix : null, ['id' => 'sound_mix', 'class' => $errors->has('sound_mix') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Sound Mix']) }}
                                        </div>
                                        </div>
                                    </div>
                                    <!-- part-7 start -->
                                    <div class="row part-7-cs">
                                        <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                            <h5>
                                                Director
                                                <button @click='toggle.directors = !toggle.directors' type="button" class="btn btn-primary" style="float:right;">
                                                <span v-if="!toggle.directors">Show</span>
                                                <span v-else>Hide</span>
                                                </button>
                                            </h5>
                                            </div>
                                            <div class="card-body" id="part_7" v-if="toggle.directors">
                                            {{-- @{{directors}} --}}
                                            <div class="row control-group" v-for="(input, i) in directors">
                                                <div class="form-group col-lg-8">
                                                {{ Form::label('name', 'Name') }}
                                                {{-- @{{i}} --}}
                                                {{-- {{ Form::select(null, getPeopleArr(), $fdata && $fdata->people ? $fdata->people->pluck('name','id')->toArray() : null, ['class' => $errors->has('entity_id') ? 'form-control   is-invalid' : 'form-control ', 'placeholder' =>'Select A Name']) }} --}}
                    
                                                <div class="input-group mb-3">
                                                    {{ Form::select(null, getPeopleArr(), $fdata && $fdata->people ? $fdata->people->pluck('id')->toArray() : null, ['class' => $errors->has('entity_id') ? 'form-control   is-invalid' : 'form-control ', 'placeholder' =>'Select A Name', 'v-model' => 'input.entity_id', ':name' => "'directors['+ input.id +'][entity_id]'",'required' => true]) }}
                    
                                                    <div class="input-group-append">
                                                    <button @click="addInput(directors, input.id, 2)" class="btn btn-primary" type="button" v-if="i < 1">+Add</button>
                                                    <button @click="remove(directors, input.id)" class="btn btn-danger" type="button" v-else>-Remove </button>
                                                    {{-- @{{input.id}} --}}
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