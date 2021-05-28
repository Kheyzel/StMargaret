@extends('layout.master_layout')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">CONTACTS</h1>
 {{--/Page Heading--}}

 
<div class="table-responsive">
 <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Contact Number 1</th>
        <th scope="col">Contact Number 2</th>
        <th scope="col">Email Address</th>
        <th scope="col">Address</th>
        <th scope="col">Bank Name</th>
        <th scope="col">Bank Branch</th>
        <th scope="col">Bank Account #</th>
        <th scope="col">Swift Code #</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($contacts as $contact)
      <tr>

        <td>{{$contact->contact_number}}</td>
        <td>{{$contact->contact_number1}}</td>
        <td>{{$contact->email_ad}}</td>
        <td>{{$contact->address}}</td>
     
        <td>{{$contact->bank_name}}</td>
        <td>{{$contact->bank_branch}}</td>
        <td>>{{$contact->bank_act_num}}</td>
        <td>{{$contact->swift_code_num}}</td>
  
        <td><a class="btn btn-sm btn-primary justify-content-end"  href="{{route ('contact.edit', $contact->id)}}">Edit</a></td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
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