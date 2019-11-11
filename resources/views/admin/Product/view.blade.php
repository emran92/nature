@extends('layouts.indexLayout.index_design')

@section('content')

    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>PRODUCT LIST</b></h4>
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('add.product')}}"><button class="btn btn-success">Add</button></a>
                <br><br>
                        <table class="table table-striped table-bordered table-hover">
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Amount</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td> {{$product->id}} </td>
                                    <td>
                                        <img src="{{'/image/image1/'.$product ->image1}}" width="50px" height="50px">
                                    </td>
                                    <td> {{$product->name}} </td>
                                    <td> {{$product->slug}} </td>
                                    <td> {{$product->categories['name']}} </td>
                                    <td> {{ str_limit($product['description'], 30) }} </td>
                                    <td> {{$product->price}} </td>
                                    <td> {{$product->amount}} </td>
                                    <td> {{$product->country}} </td>
                                    <td class="center">
                                        <p>@if($product->status == "1") <img alt="" width="30" src="{{ url('assets/img/active.svg')}}">
                                            @else <img alt="" width="40" src="{{ url('assets/img/inactive.svg')}}">@endif</p>
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show',[$product->id,$product->slug]) }}">
                                            <i class="fa fa-eye" style="font-size: 35px;"></i>
                                        </a>
                                        <a href="{{ route('product.edit',[$product->id,$product->slug]) }}">
                                            <i class="fa fa-edit" style="font-size: 35px;"></i>
                                        </a>
                                        <a rel="{{ $product->id }}" rel1="delete-product" href="javascript:" class="deleteProduct">
                                            <span class="fa fa-trash" style="font-size: 35px; color: red;"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $products->links() }}
                            </ul>
                        </nav>
            </div>
        </div><!-- row -->

    </div>
@endsection