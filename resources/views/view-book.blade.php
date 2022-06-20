@extends('layouts.header')
@section('content')
        
    <div>
        <h1 class="text-center">Book Details</h1>
    </div>

    <div>
        <div class="p-6 border">
            <h1 class="text-secondary fs-4">Book Status : <span class="text-primary">{{$book->user_name===null? "Available":"Taken"}}</span></h1>

            <h1 class="text-secondary fs-4">Book ID : {{$book->book_id}}</h1>
            <h1 class="text-secondary fs-4">Book Name : {{$book->name}}</h1>
            <h1 class="text-secondary fs-4">Taken By : {{$book->user_name}}</h1>
            @if ($book->user_name != null)
                <div class="border mt-2 p-3">
                    <p>book returned ?</p>
                    <a href="{{route('status-update', $book->id)}}" class="text-primary underline">Returned</a>
                </div>
            @endif
        </div>
    </div>
@endsection