@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h2 mb-4 text-gray-800 text-center">Add Mission</h1>


  <form action ="{{ route('mission.store')}}" method="post">
          @csrf

          <div class="form-group">
              <label class="h3 mb-3" for="mission">MISSION</label>
              {{-- <input type="text" class="form-control" name ="mission" placeholder="Enter mission"> --}}
              <textarea class="form-control" name="mission" id="mission"  rows="3" placeholder="Enter Mission"></textarea>
            </div>
            
            <button type = "submit" class="btn btn-sm btn-primary">Save</button>

        </form>

@endsection