<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('inputname', 'Input label') !!}
    {!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>