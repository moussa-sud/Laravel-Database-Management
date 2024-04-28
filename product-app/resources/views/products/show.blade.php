@extends('products.layout')

@section('content')


<div class="row">

    <div class="col align-self-start">
        
        <a class="btn btn-primary" href="{{ route('products.index') }}" role="button">All Products</a>
    </div>

</div>




<br>





<div style="margin-left: 80px" class="container p-5">

    <div class="mb-3">

        
        <h3> NAME : {{$product->name}} </h3>

    </div>

    <br>

    <div class="mb-3">
        
        <p> {{$product->details}} </p>

    </div>

    <br>


    <div class="mb-3">

        <img width="100px" src="/images/{{$product->image}}">

    </div> 

</div>



@endsection