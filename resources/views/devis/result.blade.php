@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lag-12">
            <h1> Un devis </h1>
        </div>
    </div>
    <div class="row">
            {{ $vehicle }}
           Ht : {{ $Ht }} €
           TTc : {{ $TTC }} €
    </div>

 </div>
 
    

@endsection
