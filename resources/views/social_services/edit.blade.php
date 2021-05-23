@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Programs and Services</h1>

  <form action ="{{ route('socialServices.update', $socialServices->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="Title">Title</label>
              <input type="text" class="form-control" name ="title" value = "{{$socialServices->title}}">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              {{-- <input type="text" class="form-control" name ="description" value = "{{$socialServices->description}}"> --}}
              <textarea class="form-control" name="description" id="description"  rows="5">{{ $socialServices->description }}</textarea>
            </div>
            <button type = "submit" class="btn btn-sm btn-primary">Save</button>

        </form>

@endsection

 