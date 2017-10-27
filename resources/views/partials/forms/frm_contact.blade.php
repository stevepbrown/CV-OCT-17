
{!! Form::token() !!}

{!! Form::open(['route'=>'contacts.store']) !!}


@foreach ($errors->all() as $message)
  <p>{{$message}}</p>
@endforeach




<div class="container rtb">

  <div class="form-group">
    {!! Form::label('first_name', 'First name') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control has-feedback']) !!}
    @if ($errors->has('first_name'))
        $first_name_error = $errors->pluck('first_name'));
        <p>{{$first_name_error}}</p>}}
    @endif
  </div>
  <div class="form-group">
    {!! Form::label('surname', 'Surname') !!}
    {!! Form::text('surname', null, ['class' => 'form-control has-feedback']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control has-feedback']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('telephone', 'Telephone') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control has-feedback']) !!}
  </div>
  <div class="form-group">
    <div class="form-group">
      {!! Form::label('referral', 'Where did you hear about me?') !!}
      {!! Form::select('referral',[
        '1'=>'Job site',
        '2'=>'Search engine e.g Google',
        '3'=>'Email solicitation',
        '4'=>'Other'],['class'=>'form-control']
        )  !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('description', 'Message') !!}
      {!! Form::textarea('description', null, ['class' => 'form-control has-feedback']) !!}
    </div>
    <div class="form-group">
      <div class="container text-center">
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
      </div>
    </div>

    {!! Form::close() !!}
