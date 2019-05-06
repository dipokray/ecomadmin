
@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <br>
            <div class="well">
                <h1 class="text-center text-success">Edit Category</h1>
                <hr>
                <form action="{{route('update-category')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">

                        <level class="control-label
                     col-md-3">Category Name:</level>
                        <div class="col-md-9">
                            <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control">
                            <input type="hidden" name="id" value="{{$category->id}}" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="form-group">

                        <level class="control-label col-md-3">Category Description:</level>
                        <div class="col-md-9">
                            <textarea type="text" name="category_description" class="form-control" value="" rows="5" cols="30">{{$category->category_description}}</textarea>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">

                        <level class="control-label col-md-3">Publication Status:</level>
                        <div class="col-md-9 radio">
                            <input type="radio" name="publication_status" value="1" {{ $category->publication_status == 1 ? 'checked': '' }}> Published

                            <br>
                            <input type="radio" name="publication_status" value="0" {{ $category->publication_status == 0 ? 'unchecked': '' }}> Unpublished
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-2">
                            <input type="submit" value="Update" name="btn" class="btn btn-success btn-block">
                        </div>
                    </div>




                </form>

            </div>

        </div>

    </div>
@endsection