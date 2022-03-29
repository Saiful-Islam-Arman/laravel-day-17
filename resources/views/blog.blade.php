@extends('master')
@section('title')
Blog 
@endsection 
@section('main-content')
<section class="py-5">
        <div class="container">
            <div class="row ">
                @foreach($blogs as $blog)
                <div class="col-md-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/img/'.$blog['image'])}}" alt="">
                        <div class="card-body">
                            <h3 class="card-title">{{$blog['name']}}</h3>
                            <p class="card-text"> Made in- {{$blog['made by']}} 
                            <a href="{{route('blog-detail', ['id' => $blog['id']])}}" class="btn btn-outline-primary">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection