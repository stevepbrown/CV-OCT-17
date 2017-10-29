<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('inputname', 'Input label') !!}
    {!! Form::select('inputname', $options, $selected_value, ['class' => 'form-control', 'required' => 'required', 'multiple']) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>
