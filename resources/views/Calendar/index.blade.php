@extends('layout.master_layout')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">CALENDAR OF ACTIVITIES</h1>
 {{--/Page Heading--}}

 <a class="btn btn-sm btn-primary mb-4 ml-5" href="{{route('calendar.create')}}">Add Activities</a>


 <div class="row">
  <div class="col-xs-3 col-sm-3 col-md-12">
      <div class="table-responsive">
          <table class="table table-striped table-bordered dt-responsive wrap" id="gallery" style="width:100%">
  
            <thead class="thead-dark">
              <tr>
        
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th>Image</th>
                <th scope="col">Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($calendarOfActs as $calendarOfAct)
              <tr>
        
                <td> {{$calendarOfAct->formatted_date}}</td>
                <td> {{$calendarOfAct->act_description}}</td>
                <td><img src="{{ asset('/storage/gallery_image/'. $calendarOfAct->act_image) }}" width="100px" height="100px" alt="Activity Image"></td>
                <td> <a class="btn btn-sm btn-primary justify-content-end"  href="{{ route('calendar.edit', $calendarOfAct -> id) }}">Edit</a></td>
                <td> <form action="{{ route('calendar.destroy', $calendarOfAct) }}" method="POST">
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
 