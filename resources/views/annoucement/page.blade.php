@extends('layouts.app')

@section('content')
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               Les annonces <a href="{{ route('annoucement.create') }}"> écrire une Annonce </a>
           </div>
       </div>
       <div class="row">
               <div class="col-lg-3">
                   <div class="card mb-5" style="width: 18rem;">
                       <div class="card-body">
                           <p><span>{{ $annoucement->title }}</span></p>
                           <p>{{ $annoucement->price }} € </p>
                           <p>{{ $annoucement->content }}</p>
                       </div>
                       <a href=""> Ecrire un commentaire</a>
                   </div>
               </div>
       </div>
       @include('layouts.includes.form-errors')
   </div>
@endsection