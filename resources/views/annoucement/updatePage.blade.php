@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Ajouter un Véhicule</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form method="POST" action="{{ route('annoucement.update',$annoucement) }}" >
                @method('PUT')
                <div class="form-group">
                    <label for="">Title</label>
                    <input  class="form-control" value='{{$annoucement->title}}' type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input class="form-control" value='{{$annoucement->content}}'type="text" name="content">
                </div>
                <div class="form-group">
                    <label for="">price</label>
                    <input class="form-control" value='{{$annoucement->price}}'type="number" name="price">
                </div>

                @csrf

                <button type="submit" class="btn btn-primary">Creer</button>
            </form>
        </div>
    </div>
</div>
@endsection
