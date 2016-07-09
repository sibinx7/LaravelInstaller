@extends('vendor.installer.layouts.master')

@section('title', trans('messages.welcome.title',['name'=>"OWL MOVIE"]))
@section('container')
    <p class="paragraph">{{ trans('messages.welcome.message') }}</p>
    <section>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque, beatae consequuntur deserunt dolorum ea fugiat impedit iure modi nesciunt possimus, provident qui quisquam quos rem repudiandae similique ullam vero.
    </section>
    <div class="buttons">
        <a href="{{ route('LaravelInstaller::key') }}" class="button">{{ trans('messages.next') }}</a>
    </div>
@stop