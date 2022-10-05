@push('js-bottom')

    @if ($message = Session::get('success'))
        <input type="hidden" id="message" value="{{$message}}">
        <script>
            jQuery(document).ready(function() {
                var message = document.querySelector('#message').value;
                swal.fire({
                    title: "Successful!",
                    text: message,
                    icon: "success",
                    confirmButtonColor: '#032f4b',
                });
            })
        </script>
    @endif

    @if ($message = Session::get('volunteer-success'))
        <input type="hidden" id="message" value="{{$message}}">
        <input type="hidden" id="volunteer_email" value="{{Session::get('email')}}">
        <script>
            jQuery(document).ready(function() {
                var message = document.querySelector('#message').value;
                var email = document.querySelector('#volunteer_email').value;
                swal.fire({
                    title: "Successful!",
                    text: message,
                    icon: "success",
                    allowOutsideClick: false,
                    showCancelButton: true,
                    confirmButtonColor: '#032f4b',
                    cancelButtonColor: '#ffa010',
                    confirmButtonText: 'Resend Verification Email',
                    cancelButtonText: 'No, cancel!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Please Wait !',
                            text: 'This should not take long',
                            allowOutsideClick: false,
                        }); swal.showLoading();

                        var data = {
                            email: email
                        }

                        $.ajax({
                            url:"{{route('email.verify.resend')}}",
                            headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                            },
                            type: "POST",
                            data: data,
                            dataType : 'json',
                            success: function(result){
                                console.log(result);
                                if(result.status == 'success'){
                                    Swal.fire({
                                        title: 'Sent!',
                                        text: 'Check your email inbox or spam folder',
                                        icon: 'success',
                                        confirmButtonColor: '#032f4b',
                                    });
                                }else if(result.status == 'error'){
                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'An error occured while sending you an email',
                                        icon: 'error',
                                        confirmButtonColor: '#032f4b',
                                    });
                                }
                            },
                        });

                    }
                });
            })
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <input type="hidden" id="message" value="{{$error}}">
            <script>
                jQuery(document).ready(function() {
                    var message = document.querySelector('#message').value;
                    swal.fire({
                        title: "Error!",
                        text: message,
                        icon: "error",
                        confirmButtonColor: '#032f4b',
                    });
                })
            </script>
        @endforeach
    @endif

    @if ($message = Session::get('error'))
        <input type="hidden" id="message" value="{{$message}}">
        <script>
            jQuery(document).ready(function() {
                var message = document.querySelector('#message').value;
                swal.fire({
                    title: "Error!",
                    text: message,
                    icon: "error",
                    confirmButtonColor: '#032f4b',
                });
            })
        </script>
    @endif
@endpush
