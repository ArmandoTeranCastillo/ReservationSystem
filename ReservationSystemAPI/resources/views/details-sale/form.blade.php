<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sale_id') }}
            {{ Form::text('sale_id', $detailsSale->sale_id, ['class' => 'form-control' . ($errors->has('sale_id') ? ' is-invalid' : ''), 'placeholder' => 'Sale Id']) }}
            {!! $errors->first('sale_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ticket_id') }}
            {{ Form::text('ticket_id', $detailsSale->ticket_id, ['class' => 'form-control' . ($errors->has('ticket_id') ? ' is-invalid' : ''), 'placeholder' => 'Ticket Id']) }}
            {!! $errors->first('ticket_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>