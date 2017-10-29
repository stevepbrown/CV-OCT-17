
{!! Form::token() !!}


{!! Form::open(['route'=>'contacts.store']) !!}


<div class="container">
  <div class="form-group{{ $errors->has('first_name')? ' has-feedback has-error' : '' }}">
    {!! Form::label('first_name', 'First Name*') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('first_name') }}</small>

  </div>
  <div class="form-group{{ $errors->has('surname') ? ' has-feedback has-error' : '' }}">
    {!! Form::label('surname', 'Surname*') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('surname') }}</small>
  </div>
  <div class="form-group{{ $errors->has('email') ? ' has-feedback  has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
  </div>
  <div class="form-group{{ $errors->has('telephone') ? ' has-feedback  has-error' : '' }}">
    {!! Form::label('telephone', 'Telephone') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('telephone') }}</small>
  </div>
  <div class="form-group{{ $errors->has('referral') ? ' has-feedback  has-error' : '' }}">
    {!! Form::label('referral', 'Where did you hear about me?') !!}
    {!! Form::select('referral',$lkupReferral , null, ['class' => 'form-control', 'placeholder'=>'Select referral source']) !!}
    <small class="text-danger">{{ $errors->first('referral') }}</small>
  </div>
  <div class="form-group{{ $errors->has('description') ? ' has-feedback  has-error' : '' }}">
    {!! Form::label('description', 'Message*') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
  </div>

  <div class="form-group">
    <div class="container text-center">
      {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
    </div>
  </div>

</div>



{!! Form::close() !!}
