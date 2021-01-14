@extends('layout.master_layout')
@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Update Record</h1>
 {{--/Page Heading--}}


 <form action ="{{ route('about_us.update', $aboutUs->ID)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="mission">Misson</label>
      <input type="text"  class="form-control" name ="mission" autocomplete="off" value = "{{$aboutUs->mission}}" >

    </div>
    <div class="form-group">
        <label for="mission">Vision</label>
        <input type="text" class="form-control" name ="vision" autocomplete="off" value = "{{$aboutUs->vision}}" >
    </div>

 
        <button type = "submit" class="btn btn-sm btn-primary"> Update </button>

  
  </form>








@endsection

 