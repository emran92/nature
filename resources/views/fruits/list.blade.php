@section('carousel')
    <div class="jumbotron hero-technology" style="height: 319px;">
        <h1 class="hero-title" style="margin: -15px;">Fruits World</h1>
        <p class="hero-subtitle">Buy Fresh and Best Fruits at affordable price.</p>
        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#" style="margin: -34px;">Learn more</a></p>
    </div>
@endsection

@extends('layouts.indexLayout.index_design')

@section('content')

    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>ALL FRUITS</b></h4>
        <div class="row">
            @foreach($fruits as $fruit)
                <div class="col-md-4">
                    <div class="row no-gutters border rounded overflow-hidden  mb-4 shadow-sm h-md-250 position-relative">
                        <img class="card-img-top" src="{{asset('image/image1').'/'.$fruit->image1}}" alt="image">
                        <div class="col p-4 d-flex flex-column position-relative">
                            <h5 class="d-inline-block mb-4 text-primary">{{$fruit->name}}</h5>
                            <p class="card-text"><b>Price:</b> {{$fruit->price}} Tk (Per KG)</p>
                            <p class="card-text"><b>Country:</b> {{$fruit->country}} </p>
                            <p class="card-text"><b>Category:</b> <a href="{{$fruit->categories['slug']}} ">{{$fruit->categories['name']}} </a></p>
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
                {{ $fruits->links() }}
            </ul>
        </nav>
    </div>
@endsection