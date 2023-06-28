<div class="card {{$pageis == 'welcome'? 'text-end' : 'text-start'}}">
  <img src="{{Storage::url($movie->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$movie->name}}</h3>
    <h5 class="card-title">{{$movie->director}}</h5>
    <h3 class="card-title">{{$movie->year}}</h3>
    <p class="card-text">{{Str::limit($movie->description, 80)}}</p>
    <a href="{{route('movie.show', $movie)}}" class="btn btn-primary">Go somewhere</a>
    <a href="{{route('movie.edit', $movie)}}" class="btn btn-primary">Modifica</a>
    <form action="{{ route('movie.delete', $movie)}}" method="post">
      @method('DELETE')
      @csrf
      <input type="submit" value="Elimina">
    </form>
    
  </div>
</div>