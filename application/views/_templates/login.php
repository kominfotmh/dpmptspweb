<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Panel - Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
    <style>
    .form-container{
        background: linear-gradient(#E9374C,#D31128);
        font-family: 'Roboto', sans-serif;
        font-size: 0;
        padding: 0 15px;
        border: 1px solid #DC2036;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
        margin-top: 25%;
    }
    .form-container .form-icon{
        color: #fff;
        font-size: 13px;
        text-align: center;
        text-shadow: 0 0 20px rgba(0,0,0,0.2);
        width: 50%;
        padding: 70px 0;
        vertical-align: top;
        display: inline-block;
    }
    .form-container .form-icon i{
        font-size: 124px;
        margin: 0 0 15px;
        display: block;
    }
    .form-container .form-icon .signup a{
        color: #fff;
        text-transform: capitalize;
        transition: all 0.3s ease;
    }
    .form-container .form-icon .signup a:hover{ text-decoration: underline; }
    .form-container .form-horizontal{
        background: rgba(255,255,255,0.99);
        width: 50%;
        padding: 45px 30px;
        margin: -20px 0;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
        display: inline-block;
    }
    .form-container .title{
        color: #454545;
        font-size: 23px;
        font-weight: 900;
        text-align: center;
        text-transform: capitalize;
        letter-spacing: 0.5px;
        margin: 0 0 30px 0;
    }
    .form-horizontal .form-group{
        background-color: rgba(255,255,255,0.15);
        margin: 0 0 15px;
        border: 1px solid #b5b5b5;
        border-radius: 20px;
    }
    .form-horizontal .input-icon{
        color: #b5b5b5;
        font-size: 15px;
        text-align: center;
        line-height: 38px;
        height: 30px;
        width: 40px;
        vertical-align: top;
        display: inline-block;
    }
    .form-horizontal .form-control{
        color: #b5b5b5;
        background-color: transparent;
        font-size: 14px;
        letter-spacing: 1px;
        width: calc(100% - 55px);
        height: 33px;
        padding: 2px 10px 0 0;
        box-shadow: none;
        border: none;
        border-radius: 0;
        display: inline-block;
        transition: all 0.3s;
    }
    .form-horizontal .form-control:focus{
        box-shadow: none;
        border: none;
    }
    .form-horizontal .form-control::placeholder{
        color: #b5b5b5;
        font-size: 13px;
        text-transform: capitalize;
    }
    .form-horizontal .btn{
        color: rgba(255,255,255,0.8);
        background: #E9374C;
        font-size: 15px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        width: 100%;
        margin: 0 0 10px 0;
        border: none;
        border-radius: 20px;
        transition: all 0.3s ease;
    }
    .form-horizontal .btn:hover,
    .form-horizontal .btn:focus{
        color: #fff;
        background-color: #D31128;
        box-shadow: 0 0 5px rgba(0,0,0,0.5);
    }
    .form-horizontal .forgot-pass{
        font-size: 12px;
        text-align: center;
        display: block;
    }
    .form-horizontal .forgot-pass a{
        color: #999;
        transition: all 0.3s ease;
    }
    .form-horizontal .forgot-pass a:hover{
        color: #777;
        text-decoration: underline;
    }
    @media only screen and (max-width:576px){
        .form-container{ padding-bottom: 15px; }
        .form-container .form-icon{
            width: 100%;
            padding: 20px 0;
        }
        .form-container .form-horizontal{
            width: 100%;
            margin: 0;
        }
    }
    </style>
</head>
<body>
    <div class="form-bg">
        <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="form-container">
                    <div class="form-icon">
                        <i class="fa fa-user-circle"></i>
                        <span class="signup"><?php echo $msg;?></span>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url(). 'Web_admin/login_verifikasi'; ?>" method="post">
                        <h3 class="title">WEB PANEL</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user-o"></i></span>
                            <input class="form-control" name="username" type="text" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" name="password" type="password" placeholder="Password" required>
                        </div>
                        <button class="btn signin">Login</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>
