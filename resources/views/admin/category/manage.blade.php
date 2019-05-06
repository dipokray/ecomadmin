@extends('admin.master')

@section('body')
    <div class="panel">
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>
                       SI NO
                    </th>
                    <th>Category Name</th>
                    <th>Category description</th>
                    <th>Publication status</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_description}}</td>
                    <td>{{$category->publication_status == 1? 'Published': 'Unpublished'}}</td>
                    <td>

                        <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                        <a href="{{route('delete-category',['id'=>$category->id])}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>

                    </td>

                </tr>
                    @endforeach

            </table>
        </div>
    </div>

    @endsection
