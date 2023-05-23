<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Trabajo') }}
            {{ Form::text('Trabajo', $categoria->Trabajo, ['class' => 'form-control' . ($errors->has('Trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Trabajo']) }}
            {!! $errors->first('Trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estudio') }}
            {{ Form::text('Estudio', $categoria->Estudio, ['class' => 'form-control' . ($errors->has('Estudio') ? ' is-invalid' : ''), 'placeholder' => 'Estudio']) }}
            {!! $errors->first('Estudio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Personal') }}
            {{ Form::text('Personal', $categoria->Personal, ['class' => 'form-control' . ($errors->has('Personal') ? ' is-invalid' : ''), 'placeholder' => 'Personal']) }}
            {!! $errors->first('Personal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>