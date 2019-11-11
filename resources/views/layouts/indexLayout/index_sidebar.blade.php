<div class="col-md-3 col-lg-3">
    <div class="pl-20 pl-md-0">
        <br>

        <h4 class="p-title mt-30"><b>CATEGORIES</b></h4>
        <ul class="list-block list-li-ptb-15 list-btm-border-white">
            @foreach(App\Category::all() as $category)
                <li><a style="text-decoration: none; color: #37434D" href="{{'/category/'. $category->slug}}"><b>{{$category->name}}</b></a></li>
            @endforeach
        </ul>
        <div class="mtb-50 mb-md-0">
            <h4 class="p-title"><b>DOWNLOAD NOW</b></h4>
            <img src="{{asset('image/android_ios.jpg')}}" alt="" width="100%">
        </div>
        <div class="mtb-50 mb-md-0">
            <h4 class="p-title"><b>NEWSLETTER</b></h4>
            <p class="mb-20">Subscribe to our newsletter to get notification about new updates,
                information, discount, etc..</p>
            <form class="nwsltr-primary-1">
                <input type="text" placeholder="Your email"/>
                <button type="submit"><i class="ion-ios-paperplane"></i></button>
            </form>
        </div><!-- mtb-50 -->

    </div><!--  pl-20 -->
</div><!-- col-md-3 -->