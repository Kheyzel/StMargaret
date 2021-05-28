@extends('layout.master_layout')
@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">UPDATE EMAIL ADDRESS</h1>
 {{--/Page Heading--}}


 <form action ="{{ route('contact.update', $contact->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Email Address</label>
      <textarea class="form-control" name="contact" autocomplete="off" rows="1" >{{$contact->email_ad}}</textarea>
    </div>

 
        <button class="btn btn-sm btn-primary justify-content-end" type="submit" > Update </button>

  
  </form>
  @endsection