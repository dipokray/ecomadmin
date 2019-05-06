@extends('admin.master')

@section('body')
    <div class="panel">
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>
                        SI NO
                    </th>
                    <th>Brand Name</th>
                    <th>Brand description</th>
                    <th>Publication status</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$brand->brand_name}}</td>
                        <td>{{$brand->brand_description}}</td>
                        <td>{{$brand->publication_status == 1? 'Published': 'Unpublished'}}</td>
                        <td>

                            <a href="" class="btn btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a href="" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>

                        </td>

                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection

