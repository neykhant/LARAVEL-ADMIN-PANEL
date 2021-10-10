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
                Categoryf
            </div>

        </div>

    </div>
</div>
<!-- <div style="padding: 6px 0;">
    <a href="{{ route('store') }}" class="btn btn-success">Create</a>
</div> -->
<div class="content">
    <div class="card">
        <div class="card-body">
            <form action="{{route('store')}}" method="POST" id="create">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" value="Yes" name="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection