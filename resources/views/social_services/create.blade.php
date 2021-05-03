@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Services</h1>


  <form action ="{{ route('socialServices.store')}}" method="post">
          @csrf

          <div class="form-group">
              <label for="Title">Title</label>
              <input type="text" class="form-control" name ="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              {{-- <input type="text" class="form-control" name ="description" placeholder="Enter Description"> --}}
              <textarea class="form-control" name="description" id="description"  rows="5" placeholder="Enter Description"></textarea>
            </div>
            <button type = "submit" class="btn btn-sm btn-primary">Save</button>

        </form>

@endsection