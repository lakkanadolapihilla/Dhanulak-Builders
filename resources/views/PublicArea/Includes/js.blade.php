<!-- Vendor JS Files -->
<script src="{{asset('PublicArea/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('PublicArea/assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('PublicArea/assets/js/main.js')}}"></script>

<!-- sptoast JS-->
<script src="{{ asset('PublicArea/assets/js/sptoast.js') }}"></script>

<script>
    $(document).ready(function () {

        @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
        var msg = '@php echo Session("alert-".$msg); @endphp';
        @if($msg == 'success')
        setTimeout(() => {
            alertSuccess(msg);
        }, 500);
        @endif
        @if($msg == 'danger')
        setTimeout(() => {
            alertDanger(msg);
        }, 500);
        @endif
        @if($msg == 'info')
        setTimeout(() => {
            alertInfo(msg);
        }, 500);
        @endif
        @if($msg == 'warning')
        setTimeout(() => {
            alertWarning(msg);
        }, 500);
        @endif
        @endif
        @endforeach

    });


    function alertDanger(msg) {
        $.toast({
            heading: 'Oops',
            text: msg,
            icon: 'error',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            position: 'bottom-right',
        })
    }

    function alertSuccess(msg) {
        $.toast({
            heading: 'Success',
            text: msg,
            icon: 'success',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-center',
        })
    }

    function alertWarning(msg) {
        $.toast({
            heading: 'Warning',
            text: msg,
            icon: 'warning',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-right',
        })
    }

    function alertInfo(msg) {
        $.toast({
            heading: 'Attention',
            text: msg,
            icon: 'info',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-right',
        })
    }

</script>
@yield('js')
