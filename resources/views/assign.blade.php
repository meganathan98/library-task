@extends('layouts.header')
@section('content')
  
    <div class="p-6 border">
        <form method="POST" action="{{route('assign-books')}}">
            @csrf
            <div class="mb-3">
                <select class="form-select" name="book_id" aria-label="Default select example">
                    @foreach ($books as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Student Name or Id</label>
              <input type="text" name="user" class="form-control" id="">
            </div>

            <button type="submit" class="btn btn-primary">Assign</button>
        </form>
    </div>

@endsection
               
          