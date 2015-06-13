<h5>Name</h5>
<p>{!! Form::text('name', null, ['class' => 'form-control', 'label' => 'Name']) !!}</p>
<p>{!! $errors->first('name', '<span class="help-block">:message</span>') !!}</p>

<h5>Category</h5>
@if(count($categories) > 0)
<p>{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'label' => 'Category']) !!}</p>
<p>{!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}</p>
@else
    <p>You Have Not Entered Any Categories! Go Do It!</p>
@endif

<h5>Address</h5>
<p>{!! Form::textarea('address', null, ['class' => 'form-control', 'label' => 'Address']) !!}</p>
<p>{!! $errors->first('address', '<span class="help-block">:message</span>') !!}</p>

<h5>Attending</h5>
<p>{!! Form::select('att_status', $arr_att_statuses, null, ['class' => 'form-control', 'label' => 'Attending']) !!}</p>
<p>{!! $errors->first('att_status', '<span class="help-block">:message</span>') !!}</p>

<h5>Add Partner</h5>
<p>{!! Form::checkbox('partner_checked', '', false, [ 'id' => 'partner_check', 'label' => 'Partner']) !!}</p>

{{--<p>{!! Form::select('partner_id', $pot_partners, null, ['class' => 'form-control', 'label' => 'Partner']) !!}</p>--}}
{{--<p>{!! $errors->first('partner_id', '<span class="help-block">:message</span>') !!}</p>--}}

<h3 class="partner">Partner's Details</h3>

<h5 class="partner">Name</h5>
<p>{!! Form::text('partner_name', null, ['class' => 'partner form-control', 'label' => 'Name']) !!}</p>
<p>{!! $errors->first('partner_name', '<span class="help-block">:message</span>') !!}</p>

<h5 class="partner">Category</h5>
@if(count($categories) > 0)
    <p>{!! Form::select('partner_category_id', $categories, null, ['class' => 'partner form-control', 'label' => 'Category']) !!}</p>
    <p>{!! $errors->first('partner_category_id', '<span class="help-block">:message</span>') !!}</p>
@else
    <p>You Have Not Entered Any Categories! Go Do It!</p>
@endif

<h5 class="partner">Address</h5>
<p>{!! Form::textarea('partner_address', null, ['class' => 'partner form-control', 'label' => 'Address']) !!}</p>
<p>{!! $errors->first('partner_address', '<span class="help-block">:message</span>') !!}</p>

<h5 class="partner">Attending</h5>
<p>{!! Form::select('partner_att_status', $arr_att_statuses, null, ['class' => 'partner form-control', 'label' => 'Attending']) !!}</p>
<p>{!! $errors->first('partner_att_status', '<span class="help-block">:message</span>') !!}</p>


