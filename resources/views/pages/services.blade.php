
@extends('layouts.app')

@section('title')
    Services
@endsection


@section('content')
        <h1>Products</h1>

        @if(Session::has('success'))
        <div class ="alert alert-success">
            {{Session::get('success')}}
            {{Session::put('success', null)}}
        </div>
        @endif

        @foreach ($products as $product)
            <div class="well"> 
                <h1> <a href="/show/{{$product->id}}">
                        {{$product->product_name}}</a></h1>
                <h3> Rs {{$product->product_price}}</h3>
                {{-- <p>{{$product->product_description}}</p>
                <hr>
                <h4>{{$product->created_at}}</h4> --}}
            </div>

        @endforeach
        {{$products->links()}}


@endsection