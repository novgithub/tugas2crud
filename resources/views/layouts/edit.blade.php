@extends('layouts.hefo') 

@section('title','Form Ubah Data')

@section('content')
<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Form Ubah Data</h1>
        <br><hr>
      
        <form method="post" action="/{{$blogger->id}}">
        @method('patch')
        @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input Name" name="name" value="{{$blogger->name}}">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="sosmed">Sosmed</label>
            <input type="text" class="form-control @error('sosmed') is-invalid @enderror" id="sosmed" placeholder="Input Social Media" name="sosmed" value="{{$blogger->sosmed}}">
            @error('sosmed')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="information">Information</label>
            <input type="text" class="form-control @error('information') is-invalid @enderror" id="information" placeholder="Input More Information" name="information" value="{{$blogger->information}}">
            @error('information')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection