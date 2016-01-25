@if(session()->has('flash_message'))
    <script>
        {{--{{Session::get('notification')}}--}}
        //    swal("Good job!", "You clicked the button!", "success");
        swal({
                    title:   "Good job!",
                    text:    "{{Session::get('flash_message')}}",
                    type:    "error",
                    confirmButtonText: "Ok!",
                    timer: 2000,
                }
        )
    </script>
@endif