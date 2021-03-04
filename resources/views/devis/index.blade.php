@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lag-12">
            <h1> Un devis </h1>
        </div>
    </div>
    <div class="row">
            <form method="POST" action="{{ route('devis.result') }}">
                @csrf
                <select name="vehicule" id="">
                    @foreach($vehicle as $vehicle)
                        <option value="{{$vehicle->id}}">{{ $vehicle->name }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="">Date de début de la réservation</label>
                    <input  class="form-control" type="date" name="starting_at">
                </div>
                <div class="form-group">
                    <label for="">Date de fin de la réservation</label>
                    <input  class="form-control" type="date" name="ending_at">
                </div>
                <button type="submit" class="btn btn-primary">Réserver</button>
            </form>
    </div>

 </div>
 
    

@endsection
