@extends('layouts.indexLayout.index_design')

@section('content')

    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>ADD PRODUCT</b></h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input class="form-control" type="text" name="name" value="">
                            </div>
                            <div class="form-group">
                                <label for="slug">Product Slug</label>
                                <input class="form-control" type="text" name="slug" value="">
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
                                <textarea class="form-control" type="text" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input class="form-control" type="text" name="price" value="">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input class="form-control" type="text" name="amount" value="">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input class="form-control" type="text" name="country" value="">
                            </div>
                            <div class="form-group">
                                <label for="checkbox">Enable</label>
                                <input class="" type="checkbox" name="status"  value="1">
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image 1</label>
                                    <input type="file" name="image1">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image 2</label>
                                    <input type="file" name="image2">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image 3</label>
                                    <input type="file" name="image3">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image 4</label>
                                    <input type="file" name="image4">
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