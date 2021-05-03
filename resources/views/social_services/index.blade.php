@extends('layout.master_layout')
@section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">SOCIAL SERVICES</h1>
 {{--/Page Heading--}}

 <a class="btn btn-sm btn-primary mb-4 ml-5" href="{{ route('socialServices.create')}}">Add Services</a>

        <table class="table">
            <thead class="thead-dark">
              <tr>
        
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($socialServices as $socialService)
              <tr>
                <td> {{$socialService->title}}</td>
                <td> {{$socialService->description}}</td>
                <td> <a class="btn btn-sm btn-primary justify-content-end"  href="{{route ('socialServices.edit', $socialService->id)}}">Edit</a></td>
                <td> 
                  <form action="{{ route('socialServices.destroy', $socialService) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    

       

        {{-- <h3 class="h3 mb-4 text-gray-800 text-center">Medical Mission</h3>
        <img src="assets\img\temporary200x200\feeding-program.jpg" alt=" ..." class="img-thumbnail">
        <div class="card">
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
            </div>
          </div>

        <h3 class="h3 mb-4 text-gray-800 text-center">Feeding Programs</h3>
        <img src="assets\img\temporary200x200\feeding-program.jpg" alt=" ..." class="img-thumbnail">
        <div class="card">
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
            </div>
          </div>

  --}}
   




@endsection

 