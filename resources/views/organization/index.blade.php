@extends('layout.master_layout')
@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">ORGANIZATIONAL CHART</h1>
 {{--/Page Heading--}}

 <a class="btn btn-sm btn-primary mb-4 ml-5" href="{{route('organization.create')}}">Add People</a>


 <table class="table">
    <thead class="thead-dark">
      <tr>

        <th scope="col">Position</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($organizations as $organization) 
      <tr>

        <td>{{$organization->org_position}}</td>
        <td>{{$organization->org_name}}</td>
        <td> <a class="btn btn-sm btn-primary justify-content-end"  href="{{route('organization.edit', $organization -> id)}}">Edit</a></td>
        <td> 
          <form action="{{ route('organization.destroy', $organization) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
          </form>
        </td>
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