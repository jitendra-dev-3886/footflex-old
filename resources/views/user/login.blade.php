<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="s2jfh7ByNMmBk81Sv55KacWhSiAW35Nr130H6A14">
    <title>FootFelx | User Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- favicon -->
<link rel="shortcut icon" href="/images/footflex111.png" type="image/x-icon">
<!-- fontawesome css link -->
   <!-- fontawesome css link -->
   <link rel="stylesheet" href="/frontend/css/fontawesome-all.min.css">
   <!-- line-awesome-icon css -->
   <link rel="stylesheet" href="/frontend/css/line-awesome.min.css">
   <!-- bootstrap css link -->
   <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
   <!-- swipper css link -->
   <link rel="stylesheet" href="/frontend/css/swiper.min.css">
   <!-- animate css link -->
   <link rel="stylesheet" href="/frontend/css/animate.css">

   <link rel="stylesheet" href="/backend/css/select2.min.css">
   <!-- nice select css -->
    <link rel="stylesheet" href="/frontend/css/nice-select.css">
      <!-- odometer css link -->
      <link rel="stylesheet" href="/frontend/css/odometer.css">
      <!-- main style css link -->
   <link rel="stylesheet" href="/frontend/css/style.css">
   
<style>
   :root {
       --primary-color: #0C56DB;
   }

</style>

    </head>
<body class="ltr">

<div class="preloader">
    <div class="loader-inner">
        <div class="loader-circle">
            <img src="/images/footflex111.png" alt="Preloader" style="height:200px; width:80px;" >
        </div>
        <div class="loader-line-mask">
        <div class="loader-line"></div>
        </div>
    </div>
</div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start acount
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<section class="account">
    <div class="account-area">
        <div class="account-wrapper">
            <div class="account-logo text-center">
                <a href="/" class="site-logo">
                    <img src="images/footflex111.png"  data-white_img="images/footflex111.png"
                            data-dark_img="images/footflex111.png"
                                alt="Shree Luxmi Electronics">
                </a>
            </div>
            <h5 class="title">Log in and Stay Connected</h5>
            <p>Our secure login process ensures the confidentiality of your information. Log in today and stay connected to your finances, anytime and anywhere.</p>
            <form class="account-form" id="insert_form" method="POST">
                @csrf             
                <div class="row ml-b-20">
                    <div class="col-xl-12 col-lg-12 form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text copytext">Mobile</span>
                            </div>
                             <input type="number" name="mobile" class="form--control" placeholder="Enter Mobile" required value="">
                        </div>
                    </div>
                    <div class="col-lg-12 form-group" id="show_hide_password">
                        <input type="password" required class="form-control form--control" name="password" placeholder="Password">
                        <a href="javascript:void(0)" class="show-pass"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="forgot-item">
                            <label><a href="/forgot-password">Forgot Password?</a></label>
                        </div>
                    </div>
                    <div class="col-lg-6 form-group">
                        <button type="submit" class="btn--base w-100 btn-loading">Login Now <i class="las la-arrow-right"></i></button>
                    </div>
                    <div class="col-lg-6 form-group">
                    <a href="{{ route('google-login') }}" class="btn--base w-100 btn-loading">Google login <i class="las la-arrow-right"></i></a>
                    </div>                    
                </div>
            </form>
                                <a href="{{ route('google-login') }}" class="btn--base w-100 btn-loading">Google login <i class="las la-arrow-right"></i></a>

        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End acount
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>

<!-- jquery -->
<script src="/frontend/js/jquery-3.5.1.min.js"></script>
<!-- bootstrap js -->
<script src="/frontend/js/bootstrap.bundle.min.js"></script>
<!-- swipper js -->
<script src="/frontend/js/swiper.min.js"></script>
<!-- wow js file -->

<!-- smooth scroll js -->
<script src="/frontend/js/smoothscroll.min.js"></script>
<!-- main -->
<!-- nice select js -->
<script src="/frontend/js/jquery.nice-select.js"></script>
<script src="/backend/js/select2.min.js"></script>

<script src="/frontend/js/odometer.min.js"></script>
<!-- viewport js -->
<script src="/frontend/js/viewport.jquery.js"></script>

<script src="/frontend/js/main.js"></script>


<script>
     $(".langSel").on("change", function() {
        window.location.href = "https://envato.appdevs.net/qrpay/change/"+$(this).val() ;
    });
</script>


<!-- notify js -->
<script src='https://envato.appdevs.net/qrpay/public/backend/js/bootstrap-notify.min.js'></script>

<script>
    // Show Laravel Error Messages----------------------------------------------
    $(function () {
        $(document).ready(function(){
                    });
    });
    //--------------------------------------------------------------------------

    // Function for throw error messages from javascript------------------------
    function throwMessage(type,errors = []) {
        if(type == 'error') {
            $.each(errors,function(index,item) {
                $.notify(
                    {
                        title: "",
                        message: item,
                        icon: 'las la-exclamation-triangle',
                    },
                    {
                        type: "danger",
                        allow_dismiss: true,
                        delay: 5000,
                        placement: {
                        from: "top",
                        align: "right"
                        },
                    }
                );
            });
        }else if(type == 'success') {
            $.each(errors,function(index,item) {
                $.notify(
                    {
                        title: "",
                        message: item,
                        icon: 'las la-check-circle',
                    },
                    {
                        type: "success",
                        allow_dismiss: true,
                        delay: 5000,
                        placement: {
                        from: "top",
                        align: "right"
                        },
                    }
                );
            });
        }else if(type == 'warning') {
            $.each(errors,function(index,item) {
                $.notify(
                    {
                        title: "",
                        message: item,
                        icon: 'las la-check-circle',
                    },
                    {
                        type: "warning",
                        allow_dismiss: true,
                        delay: 500000000,
                        placement: {
                        from: "top",
                        align: "right"
                        },
                    }
                );
            });
        }

    }
    //--------------------------------------------------------------------------

    // Function for set modal session value --------------------
    var validationSession = null;
    function getSessionValue(sesesionValue = null) {
        validationSession = sessionValue;
    }

    
    // Function for open modal/popup when have backend session
    function openModalWhenError(sessionValue,modalSelector) {
        if(validationSession != sessionValue) {
            return false;
        }
        openModalBySelector(modalSelector);
    }
    //----------------------------------------------------------


    function countrySelect(element,errorElement) {
        $(document).on("change",element,function(){
            var targetElement = $(this);
            var countryId = $(element+" :selected").attr("data-id");
            if(countryId != "" || countryId != null) {
                var CSRF = $("meta[name=csrf-token]").attr("content");
                var data = {
                    _token      : CSRF,
                    country_id  : countryId,
                };
                $.post("https://envato.appdevs.net/qrpay/global/get-states",data,function() {
                    // success
                    $(errorElement).removeClass("is-invalid");
                    $(targetElement).siblings(".invalid-feedback").remove();
                }).done(function(response){
                    // Place States to States Field
                    var options = "<option selected disabled>Select State</option>";
                    $.each(response,function(index,item) {
                        options += `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                    });
                    $(".state-select").html(options);
                }).fail(function(response) {
                    if(response.status == 422) { // Validation Error
                        var faildMessage = "Please select a valid Country.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }else {
                        var faildMessage = "Something went worng! Please try again.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }

                });
            }else {
                // Push Error
            }
        });
    }

    // State Select Get Cities
    function stateSelect(element,errorElement) {
        $(document).on("change",element,function(){
            var targetElement = $(this);
            var stateId = $(element+" :selected").attr("data-id");
            if(stateId != "" || stateId != null) {
                var CSRF = $("meta[name=csrf-token]").attr("content");
                var data = {
                    _token      : CSRF,
                    state_id  : stateId,
                };
                $.post("https://envato.appdevs.net/qrpay/global/get-cities",data,function() {
                    // success
                    $(errorElement).removeClass("is-invalid");
                    $(targetElement).siblings(".invalid-feedback").remove();
                }).done(function(response){
                    // console.log(response);
                    // Place States to States Field
                    var options = "<option selected disabled>Select City</option>";
                    $.each(response,function(index,item) {
                        options += `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                    });

                    $(".city-select").html(options);
                }).fail(function(response) {
                    if(response.status == 422) { // Validation Error
                        var faildMessage = "Please select a valid state.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }else {
                        var faildMessage = "Something went worng! Please try again.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }
                });
            }else {
                // Push Error
            }
        });
    }

</script>
<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Insert
        $("#insert_form").on('submit', function(event) {
            event.preventDefault();
            alert(1234);
            $.ajax({
                url: "{{ route('user-login') }}",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    if(data.error) {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++) {
                            error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                        }
                        $('#form_output').html(error_html);
                    } else {
                        $('#form_output').html(data.success);
                        $('#insert_form')[0].reset();
                    }
                }
            })
        });
    });
</script>

</body>
</html>
