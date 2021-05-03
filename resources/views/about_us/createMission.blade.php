@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Mission</h1>


  <form action ="{{ route('mission.store')}}" method="post">
          @csrf

          <div class="form-group">
              <label for="mission">Mission</label>
              <input type="text" class="form-control" name ="mission" placeholder="Enter mission">
            </div>
            
            <button type = "submit" class="btn btn-sm btn-primary">Save</button>

        </form>

@endsection