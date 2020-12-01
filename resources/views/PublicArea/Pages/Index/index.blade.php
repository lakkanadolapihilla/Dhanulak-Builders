@extends('PublicArea.Layout.app')
@section('content')

@include('PublicArea.Pages.Index.Components.home')

<main id="main">
    @include('PublicArea.Pages.Index.Components.clients')
    @include('PublicArea.Pages.Index.Components.about-us')
    @include('PublicArea.Pages.Index.Components.counts')
    @include('PublicArea.Pages.Index.Components.tabs')
    @include('PublicArea.Pages.Index.Components.services')
    @include('PublicArea.Pages.Index.Components.project')
    @include('PublicArea.Pages.Index.Components.vision')
    @include('PublicArea.Pages.Index.Components.contact')
</main>
<!-- End #main -->
@endsection
@section('css')
<style>
    #contact-us-form .error {
        color: red;
    }

</style>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script>
    $.validator.addMethod("containSpecialChars", function (value, element) {
        var patt = /[!@#$%^&*(),.?":{}|<>]/;
        return patt.test(value);
    });
    $.validator.addMethod("uppercaseChars", function (value, element) {
        var patt = /[A-Z]{1}/;
        return patt.test(value);
    });
    $.validator.addMethod("lowercaseChars", function (value, element) {
        var patt = /[a-z]{1}/;
        return patt.test(value);
    });
    $.validator.addMethod("numbercase", function (value, element) {
        var patt = /[0-9]{1}/;
        return patt.test(value);
    });
    $.validator.addMethod("emailValid", function (value, element) {
        var patt = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        return patt.test(value);
    });
    $.validator.addMethod("specialChar", function (value, element) {
        var patt = /^[A-Za-z0-9 ]+$/;
        return patt.test(value);
    });
    $(function () {
        $("#contact-us-form").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    emailValid: true,
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: "Please provide a name",
                },
                password_confirmation: {
                    required: "Please provide a email",
                    emailValid: "Please provide valid email."
                },
                subject: {
                    required: "Please provide a subject",
                },
                message: {
                    required: "Please provide a message",
                },
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });

</script>
@endsection
