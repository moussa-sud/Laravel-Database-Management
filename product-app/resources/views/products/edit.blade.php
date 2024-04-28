@extends('products.layout')

@section('content')


<div class="row">

    <div class="col align-self-start">
        
        <a class="btn btn-primary" href="{{ route('products.index') }}" role="button">All Products</a>
    </div>

</div>


@if ($errors->any())

    <div class="alert alert-danger" role="alert">
        
        <ul>
            @foreach ($errors as $item)

            <li>{{$item}}</li>

            @endforeach
            
        </ul>

    </div>
    
@else
    
@endif

<br>



<form action="{{route('products.update' , $product->id )}}" method="post" enctype="multipart/form-data" >
    @csrf

    {{-- The PUT method updates an instance of a resource by replacing the --}}
     {{-- existing resource with the resource provided in the request body. --}}
    @method('PUT')

    <div class="container p-5">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input name="name" type="text" value="{{$product->name}}" class="form-control" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Details textarea</label>
        <textarea name="details" class="form-control"  rows="3">{{$product->details}}</textarea>
    </div> 

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Image</label>

        <img width="100px" src="/images/{{$product->image}}">

        <input name="image" type="file" class="form-control" rows="3">
    </div> 

</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection