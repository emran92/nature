@extends('layouts.indexLayout.index_design')

@section('content')

    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>CATEGORY LIST</b></h4>
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('add.category')}}"><button class="btn btn-success">Add</button></a>
                <br><br>
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> ID</th>
                                <th> Name</th>
                                <th> Slug  </th>
                                <th> Status </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td> {{$category->id}} </td>
                                    <td> {{$category->name}} </td>
                                    <td> {{$category->slug}} </td>
                                    <td> {{$category->status}} </td>
                                    <td>
                                        <a href="{{'/category/'. $category->slug}}">
                                            <i class="fa fa-eye" style="font-size: 35px;"></i>
                                        </a>
                                        {{--<a href="">--}}
                                            {{--<i class="fa fa-edit" style="font-size: 35px;"></i>--}}
                                        {{--</a>--}}
                                        <a rel="{{ $category->id }}" rel1="delete-category" href="javascript:" class="deleteCategory">
                                            <span class="fa fa-trash" style="font-size: 35px; color: red;"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $categories->links() }}
                            </ul>
                        </nav>
                </div>
            </div>
        </div><!-- row -->

    </div>
@endsection

