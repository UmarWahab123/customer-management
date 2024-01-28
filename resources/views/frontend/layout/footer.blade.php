<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <footer>


        <div class="copyright">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="copyright-content">

                        <p>COPYRIGHT © 2021

                        <a class="ml-25" href="https://themaxhype.com/" target="_blank">Customer Management</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></P>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="payment-content">

                            <ul>

                                <li>We Accept</li>

                                <li>

                                    <img src="{{asset('/frontend/images')}}/payment1.png" alt="Image">

                                </li>

                                <li>

                                    <img src="{{asset('/frontend/images')}}/payment2.png" alt="Image">

                                </li>

                                <li>

                                    <img src="{{asset('/frontend/images')}}/payment3.png" alt="Image">

                                </li>

                                <li>

                                    <img src="{{asset('/frontend/images')}}/payment4.png" alt="Image">

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">

$( document ).ready(function() {

 $(".sub-formdata").submit(function(e){ 

    e.preventDefault();

    var token = $('input[name=_token]').val();
    $(".search_btn").attr("disabled", true).html('Processing...');

    var formdata = $(".sub-formdata").serialize();

    $.ajax({

            url: "{{url('/savesubscriber')}}",

            type:"POST",

            headers: {'X-CSRF-TOKEN': token},

            data:formdata,

            dataType:"json",

            success:function(data)

            { 

            Swal.fire('You have Successfully Subscribed!')

            $('.sub-formdata')[0].reset();   

            $(".search_btn").attr("disabled", false).html('Subscribe');


         }

     });

    });

});



</script>

