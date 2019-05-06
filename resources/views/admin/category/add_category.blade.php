@extends('admin.master')

@section('body')
 <div class="row">
     <div class="col-md-offset-2 col-md-8">
         <br>
         <div class="well">
             <h1 class="text-center text-success">Add Category</h1>
             <hr>
             <h5 text>{{ Session::get('massage')}}</h5>
             <form action="{{route('store')}}" method="post" class="form-horizontal">
                 @csrf
                 <div class="form-group">

                     <level class="control-label
                     col-md-3">Category Name:</level>
                     <div class="col-md-9">
                         <input type="text" name="category_name" class="form-control">
                     </div>
                 </div>
                         <br>

                         <div class="form-group">

                         <level class="control-label col-md-3">Category Description:</level>
                         <div class="col-md-9">
                             <textarea type="text" name="category_description" class="form-control" rows="5" cols="30"></textarea>
                         </div>
                         </div>
<br>

                             <div class="form-group">

                                 <level class="control-label col-md-3">Publication Status:</level>
                                 <div class="col-md-9 radio">
                                     <input type="radio" name="publication_status" value="1"> Published

<br>
                                      <input type="radio" name="publication_status" value="0"> Unpublished
                                 </div>
                             </div>
                                 <hr>

                                 <div class="form-group">
                                     <div class="col-md-9 col-md-offset-2">
                                         <input type="submit" name="btn" class="btn btn-success btn-block">
                                     </div>
                                 </div>




             </form>

         </div>

     </div>

 </div>
    @endsection