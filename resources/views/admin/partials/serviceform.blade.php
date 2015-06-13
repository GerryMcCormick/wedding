<h5>Name</h5>
<p>{!! Form::text('name', null, ['class' => 'form-control', 'label' => 'Name']) !!}</p>
<p>{!! $errors->first('name', '<span class="help-block">:message</span>') !!}</p>

<h5>Description</h5>
<p>{!! Form::textarea('description', null, ['class' => 'form-control', 'label' => 'Description']) !!}</p>
<p>{!! $errors->first('description', '<span class="help-block">:message</span>') !!}</p>

<h5>Contact</h5>
<p>{!! Form::text('contact', null, ['class' => 'form-control', 'label' => 'Contact']) !!}</p>
<p>{!! $errors->first('contact', '<span class="help-block">:message</span>') !!}</p>

<h5>Tel No</h5>
<p>{!! Form::text('telno', null, ['class' => 'form-control', 'label' => 'TelNo']) !!}</p>
<p>{!! $errors->first('telno', '<span class="help-block">:message</span>') !!}</p>

<h5>Cost</h5>
<p>{!! Form::text('cost', null, ['class' => 'form-control', 'label' => 'Cost']) !!}</p>
<p>{!! $errors->first('cost', '<span class="help-block">:message</span>') !!}</p>

<h5>Paid</h5>
<p>{!! Form::text('paid', null, ['class' => 'form-control', 'label' => 'Paid']) !!}</p>
<p>{!! $errors->first('paid', '<span class="help-block">:message</span>') !!}</p>

<h5>Date Due Paid</h5>
@if(isset($service->date_due) && !empty($service->date_due))
<p>{!! Form::text('date_due', date("l jS F Y", strtotime($service->date_due)), ['id' => 'datepicker', 'class' => 'form-control', 'label' => 'DateDuePaid']) !!}</p>
@else
    <p>{!! Form::text('date_due', '', ['id' => 'datepicker', 'class' => 'form-control', 'label' => 'DateDuePaid']) !!}</p>
@endif
<p>{!! $errors->first('date_due', '<span class="help-block">:message</span>') !!}</p>

