@extends('master')
@section('title')
Blog Details
@endsection 
@section('main-content')
<section class="py-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 m-auto my-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('/img/'.$blog['image'])}}" width="100%" height="440" alt="">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{$blog['name']}}</h3>
                            <p class="card-text">
                            {{$blog['description']}}
                            </p>
                            <b>Made in- {{$blog['made by']}}</b>
                            <hr/>
                            <h4>Tk. {{$blog['price']}}</h4>
                            <hr/>
                            <a href="" class="btn btn-outline-primary ">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
