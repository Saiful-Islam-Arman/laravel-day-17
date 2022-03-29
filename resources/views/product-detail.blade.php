@extends('master')
@section('title')
Product Detail
@endsection 
@section('main-content')
<section class="py-5">
        <div class="container">
            <div class="row ">
               <div class="col-md-6">
                   <img src="{{asset('/img/'.$product['image'])}}"  width="80%" alt="">
               </div>
               <div class="col-md-6">
                   <div class="card card-body">
                       <h3 class="card-title">{{$product['name']}}</h3>
                       <p class="card-text">{{$product['description']}}</p>
                       <hr/>
                       <h3>Tk. {{$product['price']}}</h3>
                       <hr/>
                       <a href="" class="btn btn-info">Add To Cart</a>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection