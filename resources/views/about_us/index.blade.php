@extends('layout.master_layout')
@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">About Us</h1>
 {{--/Page Heading--}}


 @foreach($abouts as $about)      

        <h3 class="h3 mb-4 text-gray-800 text-center">mission</h3>
            {{$about->mission}}
        <h3 class="h3 mb-4 text-gray-800 text-center">vision</h3>
             {{$about->vision}}
@endforeach

    <div class="d-flex justify-content-end">
        <a class="btn btn-sm btn-primary justify-content-end"  href="{{route ('about_us.edit', $about->ID)}}">Edit</a>
    </div>

 {{--Mission--}}
{{-- <form action="#">
    <div class="input-group">
        <span class="input-group-text">MISSION</span>
        <textarea class="form-control" aria-label="With textarea" rows="7" type="text" name="mission" id="mission" >{{$about->mission}}</textarea>
    </div>
    <br>
 v
    <br><br><br>
</form> --}}

{{--/Mission--}}

{{--Vision--}}
{{-- <div class="input-group">
    <span class="input-group-text">VISION</span>
    <textarea class="form-control" aria-label="With textarea" rows="7">{{$about->vision}}</textarea>
</div> --}}
{{--/Vision--}}


@endsection

 