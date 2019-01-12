@extends('layouts.layout')

@section('content')
@if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
            <form role="form" method="post" action="{{ route('storeItem')}}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            	<div class="box-header">
            		<div class="box-title">Input Item</div>
            	</div>
            	<div class="box-body">
            	<div class="form-group">
                  <label for="inputname" class="col-sm-2 control-label">Item Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputname" placeholder="name">
                  </div>
                </div>
                <br>
<br>
                <div class="form-group">
    <label for="itemtype" class="col-sm-2 control-label">Item Type</label>
    <div class="col-sm-10">
    <select class="form-control" name="itemtype_id" id="itemtype">
      @if (count($data['itemtypes']) > 0)
                        @foreach($data['itemtypes'] as $itemtype)
                          <option value="{{$itemtype->id}}">{{$itemtype->status}}</option>
                        @endforeach
                      @endif
    </select>
  </div>
</div>
<br>
<br>
<div class="form-group">
    <label for="SiteName" class="col-sm-2 control-label">Site Name</label>
    <div class="col-sm-10">
    <select class="form-control" name="site_id" id="SiteName">
      @if (count($data['sites']) > 0)
                        @foreach($data['sites'] as $site)
                          <option value="{{$site->id}}">{{$site->name}}</option>
                        @endforeach
                      @endif
    </select>
    @if (count($data['sites']) < 0)
    <span class="alert alert-error">first insert sites</span>
    @endif
  </div>
</div>
<br>
<br>
<div class="form-group">
    <label for="CompanyName" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-10">
    <select class="form-control" name="campany_id" id="CompanyName">
      @if (count($data['campanies']) > 0)
                        @foreach($data['campanies'] as $campany)
                          <option value="{{$campany->id}}">{{$campany->name}}</option>
                        @endforeach
                      @endif
    </select>
  </div>
</div>
<br>
<br>
<div class="form-group">
	<label class="col-sm-2 control-label">Quantity:</label>
	<div class="col-sm-10">
		<input class="form-control" name="quantity" type="number">
	</div>
	</div>
</div>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              
            </form>
            @endsection