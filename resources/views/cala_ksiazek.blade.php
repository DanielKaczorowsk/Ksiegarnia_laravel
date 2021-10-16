@extends('layouts.Lista_ksiazek')
@section('con')

@foreach($html ?? '' as $data)

  <div class='col-lg-3 text-center'>
    <form>
    <div class="jumbotron sklep">
      <h5>{{ $data->ksiazka }}</h5>
      <hr class="my-4">
      <img src='img/{{$data->img}}' class='img-fluid rounded'></br></br>
      <a>{{ $data->opis }}</a>
      <hr class="my-4">
      <a>Cena: {{$data->cena}} zł</a></br></br>
      <button class="btn btn-dark my-2 my-sm-0" type="submit">Kup Teraz!</button>
    </div>
  </form>
  </div>
  @endforeach
  {{-- Pagination --}}
  <div class="col-md-12 d-flex justify-content-center">
   {{ $html->links() }}
         </div>
@endsection
