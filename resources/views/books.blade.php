@extends('layouts.header')
@section('content')
        
    <div>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Booke Id</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">View</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->book_id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->user_name===null? "Available":"Taken"}}</td>
                    <td><a href="{{route('view-book',$item->id)}}" class="text-primary ">View</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>

            <div>
                {!! $books->links() !!}
            </div>
    </div>
@endsection