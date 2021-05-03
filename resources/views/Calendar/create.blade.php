@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Calendar</h1>


  <form action ="{{ route('calendar.store')}}" method="post" enctype="multipart/form-data">
          @csrf
         
          <div class="row">
          <div class="col-12">
          <div class="form-group">
              <label for="act_date">Date</label>
              <input type="date" class="form-control" name ="act_date" id="act_date">
            </div>
          </div>
        </div>
            <div class="form-group">
              <label for="act_description">Description</label>
              <textarea class="form-control" name="act_description" id="act_description"  rows="5"></textarea>
            </div>

            <div class="row">
              <div class="form-group">
                  <div class="col-xs-3 col-sm-3 col-md-4">
                       <input id="uploadImage" type="file" name="act_image" accept="image/*" capture="camera" /> 
                  </div>
              </div>
          </div>
            <button type = "submit" class="btn btn-sm btn-primary">Save</button>

        </form>

@endsection