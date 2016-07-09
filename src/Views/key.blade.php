@extends('vendor.installer.layouts.master')

@section('title', trans('messages.welcome.title',['name'=>'OWL Movies']))
@section('container')
  <p class="paragraph">{{ trans('messages.welcome.message') }}</p>
  <div class="div clearfix">
    <form action="{{route('LaravelInstaller::key_save')}}" method="post">
      {{csrf_field()}}
      <ul class="key-box">
        <li><input type="text" class="form-control" name="key[]" placeholder="Key"></li>
        <li><input type="text" class="form-control" name="key[]" placeholder="Key"></li>
        <li><input type="text" class="form-control" name="key[]" placeholder="Key"></li>
        <li><input type="text" class="form-control" name="key[]" placeholder="Key"></li>
      </ul>
      @if(session('message'))
        <p class="warning message">
          {{session('message')}}
        </p>
      @endif
      <div class="clearfix"></div>
      <div class="text-right clearfix">
        <a href="#" class="pull-left">Terms and Conditions</a>
        <button class="button pull-right" type="submit">Continue</button>
      </div>
      <div class="clearfix"></div>
    </form>
  </div>
@stop