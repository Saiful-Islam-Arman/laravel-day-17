@extends('master')
@section('title')
Product 
@endsection 
@section('main-content')
<section class="py-5">
        <div class="container">
            <div class="row ">
                @foreach($products as $product)
                <div class="col-md-3 my-2">
                   <div class="card-group">
                       <div class="card">
                            <img class="card-img-top" src="{{asset('/img/'.$product['image'])}}" alt="watchOne">
                            <div class="card-body">
                                <h3 class="card-title">{{$product['name']}}</h3>
                                <p class="card-title">{{$product['description']}}</p>
                                <h3 class="card-text">Tk- {{$product['price']}}</h3>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('product-detail', ['id' => $product['id']])}}" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                   </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection