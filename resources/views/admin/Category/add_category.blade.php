@extends('layouts.indexLayout.index_design')

@section('content')

    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>ADD CATEGORY</b></h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('category.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input class="form-control" type="text" name="name" value="">
                            </div>

                            <div class="form-group">
                                <label for="slug">Category Slug</label>
                                <input class="form-control" type="text" name="slug" value="">
                            </div>
                            <div class="form-group">
                                <label for="checkbox">Enable</label>
                                <input class="" type="checkbox" name="status"  value="1">
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
