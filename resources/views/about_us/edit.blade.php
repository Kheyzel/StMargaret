@extends('layout.master_layout')
@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">UPDATE MISSION</h1>
 {{--/Page Heading--}}


 <form action ="{{ route('mission.update', $mission->ID)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="mission" >Mission</label>
      <textarea class="form-control" name="mission" autocomplete="off" rows="5" >{{$mission->mission}}</textarea>
    </div>

    {{-- <div class="form-group">
      <label class="h4 mb-4 text-gray-700" for="vision" >Vision</label>
        <textarea class="form-control"  name="vision" autocomplete="off" rows="5">{{->vision}}</textarea>
    </div> --}}

 
        <button class="btn btn-sm btn-primary justify-content-end" type="submit" > Update </button>

  
  </form>

@endsection

 