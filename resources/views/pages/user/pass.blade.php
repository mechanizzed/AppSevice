@extends('layouts.master')
@section('menu')
  @include('layouts.menu')
@endsection
@section('content')

  <section>
    <div class="card p-3">

      {!! Form::open(['route' => 'user.pass.update', 'method' => 'put']) !!}

      <div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
        <label for="oldpassword" class="control-label">Digite seu password antigo</label>
        <input id="oldpassword" type="password" class="form-control" name="oldpassword" required>

        @if ($errors->has('oldpassword'))
          <span class="help-block">
            <strong>{{ $errors->first('oldpassword') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="control-label">Digite seu novo password</label>
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <label for="password-confirm" class="control-label">Confirmar novo password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-sm btn-primary">Atualizar</button>
      </div>

      {!! Form::close() !!}

    </div>
  </section>






@endsection
