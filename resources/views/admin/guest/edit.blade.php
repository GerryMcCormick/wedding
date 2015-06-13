@extends('admin')

@section('content')
    <h1 class="page-header">Edit Guest</h1>

    <div class="table-responsive">
        {!! Form::model($guest, ['url' => 'admin/guest/update/' . $guest->id, 'method' => 'PATCH', 'files' => true]) !!}

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

        <h5>Partner</h5>
        <select id="partner_id" name="partner_id" class="form-control" label="partner">
            <option id="partner_id" name="partner_id" value="0">No Partner</option>
        @foreach($pot_partners as $p)
                @if($p['id'] == $att_partner['id'])
                    <option id="partner_id" name="partner_id" value="{{$p['id']}}" selected="selected">{{$p['name']}}</option>
                @else
                    <option id="partner_id" name="partner_id" value="{{$p['id']}}">{{$p['name']}}</option>
                @endif
            @endforeach
        </select>

        <p></p>
        <p>{!! Form::submit('Save Guest', ['class' => 'btn btn-primary']) !!}</p>
        {!! Form::close() !!}
    </div>
@endsection