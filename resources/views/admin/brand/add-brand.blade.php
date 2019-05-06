@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <br>
            <div class="well">
                <h3 class="text-center text-success">Add Brand</h3>
                <hr>


                {{Form::open(['route'=>'brand-store','method'=>'post','class'=>'form-horizontal'])}}
                <div class="form-group">

                    <level class="control-label
                     col-md-3">Brand Name:</level>
                    <div class="col-md-9">
                        <input type="text" name="brand_name" class="form-control">
                        <span class="text-danger">{{$errors->has('brand_name') ? $errors->first('brand_name'):''}}</span>
                    </div>
                </div>
                <br>

                <div class="form-group">

                    <level class="control-label col-md-3">Brand Description:</level>
                    <div class="col-md-9">
                        <textarea type="text" name="brand_description" class="form-control" rows="5" cols="30"></textarea>
                        <span class="text-danger">{{$errors->has('brand_description') ? $errors->first('brand_description'):''}}</span>
                    </div>
                </div>
                <br>

                <div class="form-group">

                    <level class="control-label col-md-3">Publication Status:</level>
                    <div class="col-md-9 radio">
                        <input type="radio" name="publication_status" value="1"> Published

                        <br>
                        <input type="radio" name="publication_status" value="0"> Unpublished
                        <span class="text-danger">{{$errors->has('brand_description') ? $errors->first('brand_description'):''}}</span>
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-2">
                        <input type="submit" name="btn" class="btn btn-success btn-block">
                    </div>
                </div>



                {{Form::close()}}


            </div>

        </div>

    </div>
@endsection