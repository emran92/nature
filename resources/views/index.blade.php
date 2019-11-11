@section('carousel')
    <section id="carousel" style="padding: 0">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-fruits carousel-hero">
                        <h1 class="hero-title">Fresh Fruits</h1>
                        <p class="hero-subtitle"><strong>Fruit</strong> are important sources of many nutrients, including potassium, fiber, vitamin C and folate (folic acid).<br></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="login.html">Order Now</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-vegitables carousel-hero">
                        <h1 class="hero-title">Fresh Vegetables</h1>
                        <p class="hero-subtitle"><strong>Vegetables</strong> are important sources of many nutrients, including potassium, dietary fiber, folate (folic acid), vitamin A, and vitamin C.<br></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="login.html">Order Now</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-leafygreen carousel-hero">
                        <h1 class="hero-title">Leafy Green Vegetables<br></h1>
                        <p class="hero-subtitle"><strong>Leafy green vegetables</strong> are an important part of a healthy diet. They're packed with vitamins, minerals and fiber but low in calories. <br></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="login.html">Order Now</a></p>
                    </div>
                </div>


            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i style="color: black" class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i style="color:black;" class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol
                    class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>
    @endsection
@extends('layouts.indexLayout.index_design')

                @section('content')
                    <div class="col-md-9 col-lg-9">
                        <h4 class="p-title mt-30"><b>ALL FRUITS AND VEGETABLES</b></h4>
                        <div class="row">
                            @foreach($allProducts as $fruit)
                                <div class="col-md-4">
                                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                        <img class="card-img-top" src="{{asset('image/image1').'/'.$fruit->image1}}" alt="image">
                                        <div class="col p-4 d-flex flex-column position-relative">
                                            <h5 class="d-inline-block mb-4 text-primary">{{$fruit->name}}</h5>
                                            <p class="card-text"><b>Price:</b> {{$fruit->price}} Tk (Per KG)</p>
                                            <p class="card-text"><b>Country:</b> {{$fruit->country}} </p>
                                            <p class="card-text"><b>Category:</b> <a href="{{'/category/'.$fruit->categories['slug']}} ">{{$fruit->categories['name']}} </a></p>
                                            {{--<p class="small">{{ str_limit($fruit['description'], 25) }}</p>--}}
                                            <p><a class="btn btn-primary hero-button plat" style="margin-left: 50px;" role="button" href="{{ route('products.show',[$fruit->id,$fruit->slug]) }}">Details</a></p>
                                            <p class="card-text"><small class="text-muted">Updated : {{ $fruit->created_at->diffForHumans() }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- row -->

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $allProducts->links() }}
                            </ul>
                        </nav>
                    </div>
                @endsection


