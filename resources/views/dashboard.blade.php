@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if (count($listings))
                      <table>
                        <tr>
                          <th>Company</th>
                          <th></th>
                          <th></th>
                        </tr>
                        @foreach ($listings as $listing)
                          <tr>
                            <th>{{$listing->name}}</th>
                            <th></th>
                            <th></th>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
