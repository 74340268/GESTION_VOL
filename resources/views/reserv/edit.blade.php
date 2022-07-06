
@extends('layouts.master')

@section('content')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">

<style>
  .uper {
    margin-top: 40px;
  }

  h3{
    text-align: center;
    font-weight: bold;
    font-size: 30px; 
    text-transform: uppercase;
  }

  form{
    width: 50%;
    margin-left: 20%;
  }

  .btn{
    margin-left: 45%;
    margin-top: 20px;
  }

  #contenu{
    background-image: url("{{asset('images/c7.jpeg')}}");
  }
</style>
<div class="card uper">
  <div class="card-header">
    Modifier la voiture
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('reservations.update', $reservation->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom" value="{{ $reservation->nom }}"/>
          </div>

          <div class="form-group">
              <label for="prenom">prenom</label>
              <input type="text" class="form-control" name="prenom" value="{{ $reservation->prenom }}"/>
          </div><div class="form-group">
              <label for="sexe">sexe</label>
              <input type="text" class="form-control" name="sexe" value="{{ $reservation->sexe }}"/>
          </div>
          <div class="form-group">
              <label for="A">Place_A</label>
              <input type="integer" class="form-control" name="place_A" value="{{ $reservation->place_A }}"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix_A</label>
              <input type="integer" class="form-control" name="prix_A" value="{{ $reservation->prix_A }}"/>
          </div>
          <div class="form-group">
              <label for="B">Place_B</label>
              <input type="integer" class="form-control" name="place_B" value="{{ reservation->place_B }}"/>
          </div>
          <div class="form-group">
              <label for="B">Prix_B</label>
              <input type="integer" class="form-control" name="prix_B" value="{{ $reservation->prix_B }}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection