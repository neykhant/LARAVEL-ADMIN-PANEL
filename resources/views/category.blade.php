@extends('layouts.app_plain')
@section('title', 'Categorys')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display2 icon-gradient bg-mean-fruit"> </i>
            </div>
            <div>
                Category
            </div>

        </div>

    </div>
</div>
<div style="padding: 6px 0;">
    <a href="{{ route('create') }}" class="btn btn-success">Create</a>
</div>
<div class="content">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Publish</th>
                </thead>
                <tbody>
                    @foreach($categorys as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->Name}}</td>
                        <td><a href="{{ route('edit', $category->id ) }}" class="btn btn-warning">Edit</a></td>
                        <td>

                            <form action="{{ route('destroy', $category->id ) }}" method="POST" >
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit"  class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                        <td><button class="btn btn-success btn-sm">{{$category->Publish}}</button> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection