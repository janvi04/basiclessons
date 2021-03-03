
@extends('layouts.app')

@section('title')
    Services
@endsection


@section('content')

            <div class="well"> 
                <h1>{{$product->product_name}}</h1>
                <h3> Rs {{$product->product_price}}</h3>
                <p>{{$product->product_description}}</p>
                <hr>
                <h4>{{$product->created_at}}</h4>

                <a href="/edit/{{$product->id}}" class="btn btn-default">Edit</a>
                <a href="/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
            </div>

   
    


@endsection