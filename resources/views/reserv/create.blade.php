   
@extends('layouts.master')

@section('content')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
  }

  h3{
    /* margin-bottom: 50px; */
    text-align: center;
    font-weight: bold;
    font-size: 30px;
    text-transform: uppercase;
  }

  form{
    width: 50%;
    margin-left: 20%;
    height: 80%;
  }

  .btn{
    margin-left: 45%;
  }

  #contenu{
    background-image: url("{{asset('images/a.jpg')}}");
    color: white;
  }
  
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter une reservation
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

      <form method="post" action="{{ route('reservations.store') }}">
.         @csrf
          <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom" placeholder="Veuillez entrer le nom"/>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" class="form-control" name="prenom" placeholder="Veuillez entrer le prenom"/>
          </div>
          <div class="form-group">
              <label for="sexe">Sexe :</label>
              <input type="text" class="form-control" name="sexe" placeholder="Veuillez entrer le sexe"/>
          </div>
          <div class="form-group">
              <label for="A">Place_A </label>
              <input type="text" class="form-control" name="place_A" placeholder="Veuillez entrer la place"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix_A :</label>
              <input type="text" class="form-control" name="prix_A" placeholder="Veuillez entrer le prix "/>
          </div>
          <div class="form-group">
              <label for="B">Place_B</label>
              <input type="text" class="form-control" name="place_B" placeholder="Veuillez entrer la place"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix_B</label>
              <input type="text" class="form-control" name="prix_B" placeholder="Veuillez entrer le prix"/>
          </div>
          <div class="form-group">
          
             <select name="id_vol" id="">
                @foreach($vols as $vol)
                <option value="{{$vol->id}}">{{$vol->code}}</option>
              @endforeach
             </select>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
   


   

