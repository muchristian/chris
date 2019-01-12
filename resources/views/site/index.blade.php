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
              <h2 class="box-title">Site List</h2>
              <a href="{{ route('site.create') }}" class="btn btn-large btn-primary pull-right"><span class="fa fa-plus"></span> Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Location</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($sites as $site) 
                <tr>
                  <td>{{ $site->name }}</td>
                  <td>{{ $site->location }}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Location</th>
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
