@extends('products/layout')

@section('content')

<table class="table">

    <br>

    

    <thead class="table-dark">
        

        <div class="row">
            <div class="col align-self-start">
                
                <a class="btn btn-primary" href="{{ route('products.create')}}" role="button">Create</a>

            </div>

        </div>
        
        @if ($message = @Session::get('success'))


        <div class="alert alert-success" role="alert"> 
            {{$message}}
        </dir>
            
        @endif

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th width='300px' scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($products as $item)
                
            <tr>
                <td>{{$item->id}}</td>
                <td><img width="100px" src="/images/{{$item->image}}"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->details}}</td>
                <td>
                    <a href="{{route('products.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('products.show', $item->id)}}" class="btn btn-info">Show</a>
                    

                    <form action="{{route('products.destroy', $item->id)}}" method="post">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>


                    </form>

                </td>
            </tr>
                    
                @endforeach
            </tbody>
        </table>


    
@endsection