@extends('layout.master_layout')
@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">ABOUT US</h1>
 {{--/Page Heading--}}

 <a class="btn btn-sm btn-primary mb-4 ml-5" href="{{ route('mission.create')}}">Add Mission</a>
 <a class="btn btn-sm btn-primary mb-4 ml-5" href="{{ route('vision.create')}}">Add Vision</a>


 <table class="table">
    <thead class="thead-dark">
      <tr>

        <th scope="col">Mission</th>
        <th scope="col">Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($missions as $mission) 
      <tr>

        <td> {{$mission->mission}}</td>
        <td> <a class="btn btn-sm btn-primary justify-content-end"  href="{{route ('mission.edit', $mission->ID)}}">Edit</a></td>
        <td> 
          <form action="{{ route('mission.destroy', $mission) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
          </form>
        </td>
      @endforeach
    </tbody>
  </table>


  <table class="table">
    <thead class="thead-dark">
      <tr>

        <th scope="col">Vision</th>
        <th scope="col">Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($visions as $vision) 
      <tr>

        <td> {{$vision->vision}}</td>
        <td> <a class="btn btn-sm btn-primary justify-content-end"  href="{{route ('vision.edit', $vision->id)}}">Edit</a></td>
        <td> 
          <form action="{{ route('vision.destroy', $vision) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

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