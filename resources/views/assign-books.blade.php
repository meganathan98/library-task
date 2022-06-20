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
                <label for="" class="form-label">Select Book</label>
                <select class="form-select" name="book_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Student Name or ID</label>
                <input type="text" name="user" required class="form-control" id="">
              </div>
            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>
    </div>

@endsection
               
          