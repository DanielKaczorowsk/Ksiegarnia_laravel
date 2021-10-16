@extends('layouts.index')
@section('content')
<!-- O nas -->
<div class='row p-4 text-center napis'>
  <div class='col-12'>
  <h5 class="text-uppercase text-center p-4">O nas</h5>
</div>
  <div class='col-lg-6 order-lg-1 p-4'>
    <a>Księgarnia została niedawno otwarta ale już mamy najnowsze i najbardziej oczekiwane książki,
    można nas odwiedzać od poniedziałku do piątku w godzinach 9:00 - 16:00.</a></br>
    <a> Serdecznie Zapraszamy</a>
  </div>
  <div class='col-lg-6 order-lg-2 p-4'>
    <img src='img/logo.jpg' class='img-fluid'>
  </div>
  <div class='col-lg-6 order-lg-4 p-4'>
    <a>Nasi pracownicy zrobią wszystko by znaleźć dla ciebie odpowiednią książke w której przeżyjesz przygodę
    życia bądź znajdziesz odpowiedź na swoje pytania które cię męczą w smutne wieczory, można także znaleźć
    książki naukowe jak i dramaty.</a></br>
    <a> Zachęcamy do kupna i serdecznie życzymy miłego czasu z książkami</a>
  </div>
  <div class='col-lg-6 order-lg-3 p-4'>
    <img src='img/ho3.jpg' class='img-fluid'>
  </div>
  <div class='col-lg-6 order-lg-5 p-4'>
    <a> Zachęcamy też do sprzedawania nam swoich książek które naszym zdaniem będą w dobrym stanie,
      jeżeli nie masz co zrobić z książką i po pewnym czasie chcesz ją wyrzucic by nie kurzyła się
      na półce bądź jest jakaś książka dla ciebie ważna i chcesz się nią podzielić z innymi bo tylko
      kurzy się jesteśmy właśnie dla ciebie odkupimy od ciebie.</a>
  </div>
  <div class='col-lg-6 order-lg-6 p-4'>
      <img src='img/ksiazka.jpg' class='img-fluid'>
  </div>
</div>
<!-- Top 10 -->
<div class='row p-4'>
  <div class='col-12'>
  <h5 class="text-uppercase text-center p-4">Top 10 książek tygodnia</h5>
</div>
@foreach($ksiazki ?? '' as $data)
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
</div>
@endsection
