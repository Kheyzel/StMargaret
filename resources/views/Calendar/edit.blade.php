@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Activity</h1>

  <form action ="{{ route('calendar.update', $calendarOfAct->id)  }}" method="post">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-12">
          <div class="form-group">
              <label for="act_date">Date</label>
              <input type="date" class="form-control" name ="act_date" value = "{{$calendarOfAct->act_date}}">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea class="form-control" name="act_description" id="act_description"  rows="5">{{ $calendarOfAct->act_description }}</textarea>
            </div>
        </div>

            <button type = "submit" class="btn btn-sm btn-primary">Update</button>
        </div>
        </form>


@endsection

 