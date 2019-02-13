
@extends('user.app')

@section('bg-img','user/img/contact-bg.jpg')

@section('head')



@endsection

@section('title', 'Feel free to ')
@section('sub-title', 'contact me')

@section('main-content')

 <article>
      <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        @include(messages.errors')
        <form name="sentMessage" id="contactForm" novalidate="" method="post">
         {{csrf_field() }}
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" id="name" value="{{ old('name') }}" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" id="email" required="" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" name="body" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message." aria-invalid="false">{{ old('body') }}</textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
            </div>
          </form>

        </div>

        </div>
      </div>
    </article>

    <hr>
@endsection










