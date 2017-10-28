
{!! Form::token() !!}

{!! Form::open(['route'=>'contacts.store']) !!}


<div class="container rtb">
  {{-- Check if there is an error in the first name and render
  the form-group and form-control with necessary boostrap classes
  --}}





$surnameContainerAttributes,
$surnameControlAttributes,
$surnameMsgAttributes

$emailContainerAttributes,
$emailControlAttributes,
$emailMsgAttributes

$telephoneContainerAttributes,
$telephoneControlAttributes,
$telephoneMsgAttributes

$referralContainerAttributes,
$referralControlAttributes,
$referralMsgAttributes


    <div class="{{$firstNameContainerAttributes}}">
      {!! Form::label('first_name', 'First Name') !!}
      {!! Form::text('first_name', null, {{$firstNameControlAttributes}}) !!}
      <p {{$firstNameMsgAttributes}}></p>
    </div>

    <div class="{{$surnameNameContainerClass}}">
      {!! Form::label('surname', 'Surname') !!}
      {!! Form::text('surname', null, ['class' => '{{$surnameTextClass}}']) !!}
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
  }
@else



@endif


@if ($errors->has('first_name')) <!-- error  -->
  <div class="form-group has-error has-feedback">
    {!! Form::label('first_name', 'First Name') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
  </div>
@else <!-- success -->
  <div class="form-group has-success has-feedback">
    {!! Form::label('first_name', 'First Name') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
  </div>
@endif

<div class="form-group">
  {!! Form::label('surname', 'Surname') !!}
  {!! Form::text('surname', null, ['class' => 'form-control']) !!}
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
</div>

{!! Form::close() !!}
