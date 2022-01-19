@extends('layouts.template2')

@section('title', 'Contact Us')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('main')
    <div id="contact-form">
        <form action="{{route('contact')}}" method="POST">
            @csrf
            <h1>Contact Us</h1>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="" placeholder="Name">
            {{-- @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="" placeholder="Email">
            {{-- @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
            <label for="message">Message</label>
            <textarea type="text" id="message" name="message" rows="6" placeholder="Message"></textarea>
            {{-- @error('g-recaptcha-response')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            {!! htmlFormSnippet() !!} --}}
            <div class="center">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('js')

@endsection
