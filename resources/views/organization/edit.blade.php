@extends('layout.master_layout')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Organizational Chart</h1>

  <form action ="{{route('organization.update',$organization->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-12">
          <div class="form-group">
              <label for="org_position">Position</label>
              <textarea class="form-control" name="org_position" id="org_position"  rows="1">{{$organization->org_position}}</textarea>
            </div>
            <div class="form-group">
              <label for="org_name">Name</label>
              <textarea class="form-control" name="org_name" id="org_name"  rows="5">{{$organization->org_name}}</textarea>
            </div>
        </div>

            <button type = "submit" class="btn btn-sm btn-primary">Update</button>
        </div>
        </form>


@endsection

 