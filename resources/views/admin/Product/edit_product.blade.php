@extends('layouts.indexLayout.index_design')

@section('content')

    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>EDIT PRODUCT</b></h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('product.edit',[$products->id,$products->slug]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input class="form-control" type="text" name="name" value="{{$products->name}}">
                            </div>
                            <div class="form-group">
                                <label for="slug">Product Slug</label>
                                <input class="form-control" type="text" name="slug" value="{{$products->slug}}">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category">
                                    @foreach(App\Category::all() as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Product Description</label>
                                <textarea class="form-control" rows="4" type="text" name="description">{{$products->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input class="form-control" type="text" name="price" value="{{$products->price}}">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input class="form-control" type="text" name="amount" value="{{$products->amount}}">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input class="form-control" type="text" name="country" value="{{$products->country}}">
                            </div>
                            <div class="control-group">
                                <div class="pull-left">
                                    <input readonly type="checkbox" name="status" id="status"
                                           @if($products->status == "1") checked @endif value="1"><span style="">  Enable ? (mark/unmark this)</span>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="control-group">
                                <label class="control-label">Image1</label>
                                <div class="controls">
                                    <input type="file" name="image1">
                                    <input type="hidden" name="image1" value="{{ $products->image1 }}">
                                    @if(!empty($products->image1))
                                        <img style="" src="{{ asset('image/image1/'.$products->image1) }}" width="20%" height="20%">
                                    @endif
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Image2</label>
                                <div class="controls">
                                    <input type="file" name="image2">
                                    <input type="hidden" name="image2" value="{{ $products->image2 }}">
                                    @if(!empty($products->image2))
                                        <img style="" src="{{ asset('image/image2/'.$products->image2) }}" width="20%" height="20%">
                                    @endif
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Image3</label>
                                <div class="controls">
                                    <input type="file" name="image3">
                                    <input type="hidden" name="image3" value="{{ $products->image3 }}">
                                    @if(!empty($products->image3))
                                        <img style="" src="{{ asset('image/image3/'.$products->image3) }}" width="20%" height="20%">
                                    @endif
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Image4</label>
                                <div class="controls">
                                    <input type="file" name="image4">
                                    <input type="hidden" name="image4" value="{{ $products->image4 }}">
                                    @if(!empty($products->image4))
                                        <img style="" src="{{ asset('image/image4/'.$products->image4) }}" width="20%" height="20%">
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- row -->

    </div>
@endsection