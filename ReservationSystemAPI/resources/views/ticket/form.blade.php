<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('concert_id') }}
            {{ Form::text('concert_id', $ticket->concert_id, ['class' => 'form-control' . ($errors->has('concert_id') ? ' is-invalid' : ''), 'placeholder' => 'Concert Id']) }}
            {!! $errors->first('concert_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sale_id') }}
            {{ Form::text('sale_id', $ticket->sale_id, ['class' => 'form-control' . ($errors->has('sale_id') ? ' is-invalid' : ''), 'placeholder' => 'Sale Id']) }}
            {!! $errors->first('sale_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('place') }}
            {{ Form::text('place', $ticket->place, ['class' => 'form-control' . ($errors->has('place') ? ' is-invalid' : ''), 'placeholder' => 'Place']) }}
            {!! $errors->first('place', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('row') }}
            {{ Form::text('row', $ticket->row, ['class' => 'form-control' . ($errors->has('row') ? ' is-invalid' : ''), 'placeholder' => 'Row']) }}
            {!! $errors->first('row', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('seat') }}
            {{ Form::text('seat', $ticket->seat, ['class' => 'form-control' . ($errors->has('seat') ? ' is-invalid' : ''), 'placeholder' => 'Seat']) }}
            {!! $errors->first('seat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $ticket->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>