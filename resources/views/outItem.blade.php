@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                      <div class="box">
            <div class="box-header">
              <h2 class="box-title">Outputted Item</h2>
            </div>
            <form class="form-horizontal" method="post" action="{{ route('storeOut'}}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Inputs Name</label>
    <div class="col-sm-10">
    <select class="form-control" name="input_id" id="InputName">
      @if (count($data['inputs']) > 0)
                        @foreach($data['inputs'] as $input)
                          <option value="{{$input->id}}">{{$input->name}}</option>
                        @endforeach
                      @endif
    </select>
    @if (count($data['inputs']) < 0)
    <span class="alert alert-error">no Item in stock</span>
    @endif
  </div>
</div>
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
   <button type="submit" class="btn btn-info pull-right">Submit</button>
            </form>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($outputted as $outputteds)
                  <td>{{$outputteds->inputs->name}}</td>
                  <td>{{$outputteds->inputs->campany_id}}</td>
                  <td>{{$outputteds->site_id}}</td>
                  <td>{{$outputteds->inputs->quantity}}</td>
                  @endforeach
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
                
        </div>
    </div>
</div>
@endsection
