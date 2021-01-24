@extends('layouts.app');

@section('content')
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach 

  @if(Session::has('message'))
  <div>{{Session::get('message')}}</div>
  @endif


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Edit')}}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('users.update') }}">
              @csrf

              <div class="form-group row">
                <label for="name"class="col-md-4 col-form-label text-md-right">{{ __('Name')}}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="email"class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adress')}}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
                </div>
              </div>

             
              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    変更する
                  </button>
                </div>
              </div>

            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
