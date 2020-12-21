@extends('layouts.default', ['title' => 'Contact'])
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a
                        href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>.
                </p>
                <form action="{{ route('contact_path') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required="required">
                        {!! $errors->first('name', '<div class="alert alert-danger help-block">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required="required">
                        {!! $errors->first('email', '<div class="alert alert-danger help-block">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" cols="10" rows="10"
                            class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                            required="required">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<div class="alert alert-danger help-block">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
