@extends('layout.master_layout')
@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">UPDATE CONTACTS</h1>
 {{--/Page Heading--}}


 <form action ="{{ route('contact.update', $contact->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Contact 1</label>
      <textarea class="form-control" name="contact_number" autocomplete="off" rows="1" >{{$contact->contact_number}}</textarea>
    </div>

    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Contact 2</label>
      <textarea class="form-control" name="contact_number1" autocomplete="off" rows="1" >{{$contact->contact_number1}}</textarea>
    </div>

    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Email Address</label>
      <textarea class="form-control" name="email_ad" autocomplete="off" rows="1" >{{$contact->email_ad}}</textarea>
    </div>

    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Address</label>
      <textarea class="form-control" name="address" autocomplete="off" rows="1" >{{$contact->address}}</textarea>
    </div>

    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Bank Name</label>
      <textarea class="form-control" name="bank_name" autocomplete="off" rows="1" >{{$contact->bank_name}}</textarea>
    </div>

    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Bank Branch</label>
      <textarea class="form-control" name="bank_branch" autocomplete="off" rows="1" >{{$contact->bank_branch}}</textarea>
    </div>

    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Bank Account Number: </label>
      <textarea class="form-control" name="bank_act_num" autocomplete="off" rows="1" >{{$contact->bank_act_num}}</textarea>
    </div>

    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="contact" >Swift Code Number</label>
      <textarea class="form-control" name="swift_code_num" autocomplete="off" rows="1" >{{$contact->swift_code_num}}</textarea>
    </div>
 
        <button class="btn btn-sm btn-primary justify-content-end" type="submit" > Update </button>

  
  </form>
  @endsection