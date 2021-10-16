@extends('layouts.index')
@section('content')
<div class="container">
<div id='c' class='row p-4'>
<div class='col-md-6'>
  <div class="form-check">
    @foreach($gatunek ?? '' as $g)
  <input class="form-check-input" type="checkbox" value="{{$g->gatunek}}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  {{ $g->gatunek }}
</label></br>
  @endforeach
</div>
</div>
<div class='col-md-6'>
<form>
  <div class="form-group">
      <label for="inputState">Od</label>
      <select id="inputState" class="form-control">
        <option selected>10</option>
        <option>30</option>
        <option>50</option>
        <option>100</option>
        <option>200</option>
      </select>
    </div>
  <div class="form-group">
      <label for="inputState">Do</label>
      <select id="inputState" class="form-control">
        <option selected>10</option>
        <option>30</option>
        <option>50</option>
        <option>100</option>
        <option>200</option>
      </select>
    </div>
</form>
</div>
</div>
</div>
<div id='dt' class='row p-4'>
  <div class='col-md-12 p-5 text-center'>
    <h3>Lista Książek</h3>
  </div>
@yield('con')

</div>
</div>
@endsection
