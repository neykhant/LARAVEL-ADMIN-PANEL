<!-- @extends('layouts.app_plain')
@section('title', 'Categorys')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display2 icon-gradient bg-mean-fruit"> </i>
            </div>
            <div>
                Categoryf
            </div>
        </div>
    </div>
</div>
<div>
    <button class="btn btn-success">Create</button>
</div>
<div class="content">
    <h2>hello</h2>
<button class="btn btn-success">Create</button>

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
                        <td><button class="btn btn-warning">Edit</button></td>
                        <td><button class="btn btn-danger">Delete</button></td>
                        <td><button class="btn btn-success btn-sm">{{$category->Publish}}</button> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection -->