<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5 menu">
        <div class="container"> 
            <div class="collapse navbar-collapse" id="navbarNav">
                    
                <ul class="navbar-nav">
                    @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registration') }}">Register</a>
                    </li>

                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>

                    @endguest
                </ul>
                <div className="header-icon px-3">
                      <i className="fa-solid fa-user p-x1"></i>
                </div>
                
            </div>
        </div>
    </nav>
    <div class="container content">

        @yield('content')
        
    </div>
    
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="{{asset('resources/js/lightslider.js')}}"></script>
        <script src="{{asset('resources/js/lightgallery-all.min.js')}}"></script>
        <script src="{{asset('resources/js/prettify.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <script src="{{asset('resources/js/datatables.min.js')}}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script type="text/javascript"  src="../jQuery/jQuery-2.1.3.min.js"></script>
</html>