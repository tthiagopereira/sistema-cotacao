<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de gerenciamento de serviços e de pessoas">
    <meta name="author" content="Thiago Pereira dos Santos">
    <meta name="keyword" content="Sistema de cotação">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->


    <title>SPD-AC - Bem vindo</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Styles required by this views -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('img/') }}"/>
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    {{--<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">--}}
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/animate/animate.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/select2/select2.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!--=============================================================-->
    <link rel="stylesheet" href="{{asset('plugs/AmaranJS/dist/css/amaran.min.css')}}">
</head>

<body class="app flex-row align-items-center">

<div class="limiter">

    <div class="container-login100">
        <div class="wrap-login100">

            <div class="login100-pic js-tilt" data-tilt>

                <img src="img/10339-meeting.gif" alt="IMG">

            </div>

            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">

                {{ csrf_field() }}

                <span class="login100-form-title">
						SPD-AC
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Informe um email valido: exemplo@emplo.com">

                    <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-sm chat-input input100" required placeholder="E-mail">

                    @if ($errors->has('email'))
                        {{--<span class="invalid-feedback teste" role="alert"  ><strong></strong></span>--}}
                        <input type="text" hidden value="{{ $errors->first('email') }} " id="mensagem">
                    @endif

                    <script type="text/javascript">
                        setTimeout(function() {
                            $(".teste").fadeOut().empty();
                        }, 4000);
                    </script>

                    <span class="focus-input100"></span>

                    <span class="symbol-input100">

							<i class="fa fa-envelope" aria-hidden="true"></i>

                    </span>

                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">

                    <input type="password" name="password" class="form-control input-sm chat-input input100" placeholder="Informe a senha" required>

                    <span class="focus-input100"></span>

                    <span class="symbol-input100">

							<i class="fa fa-lock" aria-hidden="true"></i>

						</span>

                </div>

                <div class="container-login100-form-btn">
                    <button id="teste" type="submit" class="login100-form-btn">
                        Entrar
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <a class="txt2" href="{{ route('register') }}">
                        Novo fornecedor
                    </a>
                </div>

                <div class="text-center p-t-120">

                    <div class="footer text-white text-center txt2">

                        <p>© 2021 SPD-AC. Desenvolvio por <strong>Thiago Pereira dos Santos</strong></p>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ asset('js/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })

    var mensagem = $('#mensagem').val();

    $(document).ready(function(){

        if(mensagem){
            $.amaran({
                'theme'     :'colorful',
                'content'   :{
                    bgcolor:'#ae3232',
                    color:'#fff',
                    message: mensagem
                },
                'position'  :'bottom right',
                'outEffect' :'slideBottom'
            });
        }
    });



</script>
<!--===============================================================================================-->
<!-- Bootstrap and necessary plugins -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{asset('plugs/AmaranJS/dist/js/jquery.amaran.min.js')}}"></script>
<script src="{{ asset('js/maskinput.js') }}"></script>
<script>
    jQuery(function ($) {
        $("#identidade_militar").mask("999999999-9");
        $("#contato").mask("(99) 99999-9999");
    });
</script>

</body>
</html>