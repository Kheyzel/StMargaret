@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center">Add Vision</h1>


  <form action ="{{ route('vision.store')}}" method="post">
          @csrf

          <div class="form-group">
              <label for="vision">Vision</label>
              <textarea class="form-control" name="vision" id="vision"  rows="3" placeholder="Enter Vission"></textarea>
              {{-- <input type="text" class="form-control" name ="vision" placeholder="Enter vision"> --}}
            </div>
            
            <button type = "submit" class="btn btn-sm btn-primary">Save</button>

        </form>

@endsection