<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .menu{
            font-weight: 700;
            cursor: pointer;        
            text-align: center;
            font-size: 20px;
            border-top: 15px solid #ccdfef;
            position: fixed;
            /* top: 24px; */
            top: 0;
            right: 0;
            left: 0;
            background: #fff;
            z-index: 100;
            box-shadow: 0 6px 10px #bbbbbb59;
        }

        .navbar-nav .nav-link{
            color: #0060ae !important;
            font-size:17px;
        }

        .content{
            margin-top: 150px !important;
        }

        .header-icon{
            border: 2px solid #0060ae;
            width: 32px;
            height: 32px;
            border-radius: 100%;
            padding: 0;
              position: relative;
        }

        .header-icon i{
            font-size: 20px;
            position: absolute;
            top: 5.5px;
            left: 2.7px;
        }

        body{
            background-color:#f2f2f2;
            /* width: 100vw; */
        }

        .form-wrap{
            width: 390px;
            background: #fff;
            border-radius: 10px;
            padding: 50px 55px 33px;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,.1);
        }
        
        form{
            display:flex;
            justify-content: center;
            flex-direction: column;
        }

        .form-title{
            font-family: Poppins-Bold;
            font-size: 30px;
            color: #333;
            line-height: 1.2;
            text-align: center;
        }

        input.form-control {
            font-family: Poppins-Regular;
            font-size: 15px;
            color: #555;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 45px;
            background: 0 0;
            padding: 0 5px;
            outline: none;
            border: 2px solid #ccc;
        }

        input.form-control:focus{
            transition: all 0.5s ease;
            outline: none;
            border: 2px solid #6a7dfe;
        }

        .form-btn{
            background-color: #0060ae;
            border: 0;
            border-radius: 20px;
            width: 120px;
            text-align:center;
            height: 40px
        }
    </style>
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
</html>