@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Create listing</div>

              <div class="panel-body">
                {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                  {{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
                  {{ Form::bsText('email','',['placeholder' => 'Contact Email']) }}
                  {{ Form::bsText('website','',['placeholder' => 'Contact Website']) }}
                  {{ Form::bsText('phone','',['placeholder' => 'Contact Phone']) }}
                  {{ Form::bsText('address','',['placeholder' => 'Business Address']) }}
                  {{ Form::bsTextArea('bio','',['placeholder' => 'About Business']) }}
                  {{ Form::bsSubmit('submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
