@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="commonForm">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="invalid-feedback" role="alert">
                                    <strong id="name-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="invalid-feedback " role="alert">
                                    <strong id="email-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                <span class="invalid-feedback" role="alert">
                                    <strong id="password-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" id="commonSubmitBtn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click','#commonSubmitBtn',function(){
		var formData   = new FormData($("#commonForm")[0]);
        var url        = $("#commonForm").attr('action');
        $('#commonSubmitBtn').prop('disabled', true);
        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: url,
            async: true,
            data: formData,
            success: function (response) {
                $('#commonSubmitBtn').prop('disabled', false);
                removeExistingErrors();
                commonResponseHandler(response);
            }
        });
    });

    function removeExistingErrors() {
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').show();
        $('#name-error').empty();
        $('#email-error').empty();
        $('#password-error').empty();
    }

    function commonResponseHandler(response) {
        if(response.status == 1) {
            location.href = response.redirectPath;
        } else {
            $.each(response.message, function(fieldName,errorMessage) {
                $('#'+fieldName).addClass('is-invalid');
                var caste = $('#'+fieldName+"-error");
                $.each(errorMessage, function(key,error) {
                    caste.html(error);
                });
            });
        }
    }
</script>
@endsection
