@extends('layout.master_layout')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection


@section('content')
<h1 class="h3 mb-4 text-gray-800 text-center">GALLERY</h1>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    

    <div class="d-flex">
        <a class="btn btn-sm btn-primary mb-2 ml-5" href="{{route('gallery.create')}}">Upload New Image</a>
    </div>
</div>

 
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered dt-responsive wrap" id="gallery" style="width:100%">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Date</th>
                    {{-- <th>Edit</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleries as $gallery)
                <tr>
                    <td><img src="{{ asset("/storage/gallery_images/".$gallery->gallery_image) }}" width="170px" height="100px" alt="Image"/></td>
                    <td>{{ $gallery->gallery_description }}</td>
                    <td>{{ $gallery->gallery_date}}</td>
                    <td>
                        <form action="{{ route('gallery.destroy', $gallery) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                            </form>
                    </td>
                    {{-- <td>
                        <a class="btn btn-sm btn-info" href="{{ route('gallery.edit', $gallery->id) }}">Edit</a>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection

@section('page_level_scripts')

    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
    // Call the dataTables jQuery plugin
     $(document).ready(function(){
         $('#gallery').DataTable();
    });
    </script>

@endsection
