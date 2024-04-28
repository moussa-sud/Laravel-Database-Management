@extends('products.layout')

@section('content')

<br>

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

{{-- enctype="multipart/form-data" we use it ifwe have images in the form --}}

<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
 @csrf
<div class="container p-5">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Details textarea</label>
        <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div> 

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Image</label>
        <input name="image" type="file" class="form-control" id="exampleFormControlTextarea1" rows="3">
    </div> 

</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection