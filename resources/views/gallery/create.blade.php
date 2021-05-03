@extends('layout.master_layout')



@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800">New Entry (PWD Information)</h1> --}}
    <h2 class="m-0 font-weight-bold text-info">New Image</h2>
</div>

<form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    {{-- <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-8">
        <div class="form-group">
            <label for="project_title"><strong>News Title: </strong></label>
            <input type="text" name="project_title" id="project_title" class="form-control" placeholder="" autocomplete="off" value="{{ old('project_title') }}">
        </div>
    </div> --}}

    <div class="col-xs-3 col-sm-3 col-md-4">
        <div class="form-group">
            <label for="project_date"><strong>Date: </strong></label>
            {{-- <input type="" name="service_desc" id="service_desc" class="form-control" placeholder="" autocomplete="off" value="{{ old('service_desc') }}"> --}}
            <input type="date" name="gallery_date" id="gallery_date" class="form-control" placeholder="" autocomplete="off" value="{{ old('project_date') }}">
        </div>
    </div>

        <div class="form-group">
            <label for="project_desc"><strong>Description: </strong></label>
            {{-- <input type="" name="service_desc" id="service_desc" class="form-control" placeholder="" autocomplete="off" value="{{ old('service_desc') }}"> --}}
            <textarea class="form-control"  name="gallery_description" id="gallery_description" autocomplete="off" rows="5">{{ old('project_desc') }}</textarea>
        </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-xs-3 col-sm-3 col-md-4">
                         <input id="uploadImage" type="file" name="gallery_image" accept="image/*" capture="camera" />
                         
                    </div>
                </div>
            </div>



    <button class="btn btn-primary btn-sm" type="submit">Save Image</button>
</form>



@endsection

@section('page_level_scripts')

<script src="{{ asset('assetsbackend/js/cropped-image.js') }}"></script>

@endsection
