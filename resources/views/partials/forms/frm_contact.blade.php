
{!! Form::token() !!}

{!! Form::open(['route'=>'contacts.store']) !!}


{{----------------------------------------------------------------------------------------------------------

In production these fields would require validation. THis can be achieved simply in HTML5 by using the
new input types e.g email etc. Unfortunately these do not appear to be supported by the form facade at
this stage.

Pattern-matching can also be used to match against regular expressions.

A more comprehensive job can be done using javascript e.g Jquery or Vue.js, or by leveraging the
validation classes in Laravel itself.

------------------------------------------------------------------------------------------------------------}}



<div class="container rtb">

  <div class="form-group">
    {!! Form::label('first_name', 'First name') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required','maxlength'=>'60']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('surname', 'Surname') !!}
    {!! Form::text('surname', null, ['class' => 'form-control', 'required' => 'required','maxlength'=>'60']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com','maxlength'=>'50']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('telephone', 'Telephone') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control', 'required' => 'required','maxlength'=>'15','type'=>'tel']) !!}
  </div>
  <div class="form-group">
    <div class="form-group">
      {!! Form::label('referral', 'Where did you hear about me?') !!}
      {!! Form::select('referral',[
        '1'=>'Job site',
        '2'=>'Search engine e.g Google',
        '3'=>'Email solicitation',
        '4'=>'Other']
        )  !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('description', 'Message') !!}
      {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required','maxlength'=>'255']) !!}
    </div>
    <div class="form-group">
      <div class="container text-center">
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
      </div>
    </div>

    {!! Form::close() !!}
