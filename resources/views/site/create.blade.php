@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-sm-8">
    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
            <form role="form" method="post" action="{{ route('site.store')}}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-header">
                <div class="box-title">Site Input</div>
              </div>
            	<div class="box-body">
            	<div class="form-group">
                  <label for="inputname" class="col-sm-2 control-label">Site Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputname" placeholder="name">
                  </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label for="inputlocation" class="col-sm-2 control-label">Site Location</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="location" id="inputlocation" placeholder="location">
                  </div>
                </div>
</div>

                <button type="submit" class="btn btn-info pull-right">Submit</button>
            </form>
          </div>
        </div>
            @endsection