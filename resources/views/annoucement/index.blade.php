@extends('layouts.app')

@section('content')
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               Les annonces <a href="{{ route('annoucement.create') }}"> écrire une Annonce </a>
           </div>
       </div>
       <div class="row">
       <div class="row">
           @foreach($annoucements as $annoucement)
               <div class="col-lg-3">
                   <div class="card mb-5" style="width: 18rem;">
                       <div class="card-body">
                           <p><span>{{ $annoucement->title }}</span></p>
                           <p>{{ $annoucement->price }} € </p>
                           <p>{{ $annoucement->content }}</p>
                            <a href="{{ route('annoucement.page', $annoucement) }}" class="btn btn-primary">Savoir plus</a>
                            @if ($annoucement->user_id === $user_id )
                                <form method="POST" action="{{ route('annoucement.delete', $annoucement) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{ route('annoucement.update.page', $annoucement) }}"> Modifier</a>
                            @endif
                       </div>
                   </div>
               </div>
           @endforeach
       </div>
       </div>
       @include('layouts.includes.form-errors')
   </div>
@endsection