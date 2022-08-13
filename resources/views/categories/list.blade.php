@extends('layouts.app')

@section('main')
    <div class="container pt-5">
        <h2>categories <a class="btn btn-info" href="/category-create">New category</a></h2>

        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>S.NO.</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info" >Edit</a>
                        <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection