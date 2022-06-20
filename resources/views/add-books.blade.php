@extends('layouts.header')
@section('content')

    {{--success message--}}
    @if(session('success'))
        <div class="alert alert-success m-4 ">
            {{session('success')}}
        </div>
    @endif
  
    <div class="p-6 border">
        <form method="POST" action="{{route('store-books')}}">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Book name</label>
                <input type="text" name="name" required class="form-control" id="">
              </div>
            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>
    </div>

@endsection
               
          