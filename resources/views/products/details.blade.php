@extends('layouts.indexLayout.index_design')

@section('content')


    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>DETAILS</b></h4>
        <div class="row">
            <div class="section section-gray">
                <div class="section-content">
                    <div class="product-details">
                        <ul class="product-images">
                            <li class="preview"><img src="{{asset('image/image1').'/'.$product->image1}}" alt=""></li>
                            <!-- Don't show small pictures if there's only 1 -->
                            <li>
                                <a href="javascript:void(0)"><img src="{{asset('image/image1').'/'.$product->image1}}" alt=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{asset('image/image2').'/'.$product->image2}}" alt=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{asset('image/image3').'/'.$product->image3}}" alt=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{asset('image/image4').'/'.$product->image4}}" alt=""></a>
                            </li>
                        </ul>
                        <ul class="product-info">
                            <h1 class="product-name">{{$product->name}}</h1>
                            <li class="product-price"><b>Price: </b><span>৳</span>&nbsp;<span>{{$product->price}}</span></li>
                            <li class="product-name">Amount: {{$product->amount}}</li>
                            <li class="product-addtocart">
                                <a style="text-decoration: none;" href="{{'/cart'}}"><button>Add To Cart</button></a>
                            </li>
                            <li class="product-description">
                                <p>{{$product->description}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tabs">
                <input type="radio" name="tabs" id="tabone" checked="checked">
                <label for="tabone">Review</label>
                <div class="tab">
                    <form id="contact-form" name="contact-form" action="" method="POST">
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" placeholder="Your Review"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="text-center text-md-left">
                            <a class="btn btn-primary btn-block text-white font-weight-bold">Send</a>
                        </div>
                    </form>
                    <br>
                    <h4>All Reviews</h4>
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Alhamdulillah I am their regular client. I am really happy about their service and quality of the product they provide. I expect they will continue of their quality and services in future.</p>
                            </div>
                            <h3 class="title">CR King</h3>
                            <span class="post">Regular Customer</span>
                        </div>
                        <br>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    At last found a good source of chemical free fruit, taste good, service is good, hope you will continue this quality.
                                </p>
                            </div>
                            <h3 class="title">Mithun Rana</h3>
                            <span class="post">Regular Customer</span>
                        </div>
                        <br>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    I am pleased with their product and service. Fruits were fresh and the service was better than expectation.
                                </p>
                            </div>
                            <h3 class="title">Abdul Alim</h3>
                            <span class="post">Visiting Customer</span>
                        </div>
                        <br>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    I personally used their service. There are lot of online shops we see today and most of them sell almost everything. And their fruits are genuine from my perspective( their fruits get rotten after few days because there is no preservative ).
                                </p>
                            </div>
                            <h3 class="title">Arif Hossain Sarker</h3>
                            <span class="post">Regular Customer</span>
                        </div>
                    </div>
                </div>

                <input type="radio" name="tabs" id="tabtwo">
                <label for="tabtwo">Nutrition Details</label>
                <div class="tab">
                    <img src="{{asset('/image/nutrition.png')}}" width="355" height="auto">
                </div>
            </div>
        </div><!-- row -->

    </div>




@endsection