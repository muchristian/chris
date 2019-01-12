@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <div class="box">
            <div class="box-header">
              <h2 class="box-title">Inputed Item</h2>
              <a href="{{ route('inputItem') }}" class="btn btn-large btn-primary pull-right"><span class="fa fa-plus"></span> Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Company</th>
                  <th>Site</th>
                  <th>User</th>
                  <th>Quantity</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                  
                @foreach($inputs as $input) 
                <tr>
                  <td>{{ $input->name }}</td>
                  <td>{{ $input->itemtype_id }}</td>
                  <td>{{ $input->campany_id }}</td>
                  <td>{{ $input->site_id }}</td>
                  <td>{{ $input->user_id }}</td>
                  <td>{{ $input->quantity }}</td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Company</th>
                  <th>Site</th>
                  <th>User</th>
                  <th>Quantity</th>
                  <th>action</th>
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
