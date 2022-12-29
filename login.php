<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        a {
            text-decoration:none;
        }
        body{
            background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
            background-repeat: no-repeat;
        }
        label {
            font-family:"Raleway", sans-serif;
            font-size:11pt;
        }
        #forgot-pass{
            color: #2dbd6e;
            font-family:"Raleway", sans-serif;
            font-size:10pt;
            margin-top:3px;
            text-align:right;
        }
        #card {
            background:#fbfbfb;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 410px;
            margin: 6rem auto 8.1rem auto;
            width: 329px;
        }

        #card-content{
            padding: 12px 44px;

        }

        #card-title{
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }

        #signup{
            color: #2dbd6e;
            font-family: "Raleway",sans-serif;
            font-size: 10pt;
            margin-top: 16px;
            text-align: center;
        }

        #submit-btn{
            background: -webkit-linear-gradient(right, #7b8ef7,#2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor : pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;

        }

        #submit-btn:hover {
            box-shadow: 0px 1px 18px #24c64f;
        }

        .form {
            align-items: left;
            display: flex;
            flex-direction: column;
        }

    .form-border {
        background: -webkit-linear-gradient(right, #7b8ef7,#2ec86f);
        height: 1px;
        width: 100%;

    }

    .form-content{
        background:#fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #7b8ef7,#2ec86f);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    </style>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN APLIKASI</h2>
                <div class="underline-title"></div>
            </div>
            <form action="aksi_login.php" method="POST" class="form">
                <label for="user-username" style="padding-top:13px"> &nbsp;Username</label>
                <input type="username" id="user-username" class="form-content" name="username" autocomplate="on" required>

                <label for="user-password" style="padding-top:13px">&nbsp;Password</label>
                <input type="password" id="user-password" class="form-content" name="password" required>

                <div class="form-border"></div>
                <a href="#">
                    <legend id="forgot-pass">Forgot Passowrd?</legend>
                </a>

                <input type="submit" id="submit-btn" name="login" value="LOGIN">
                <a href="#" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>
</html>