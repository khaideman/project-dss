<!DOCTYPE html>
<html>
<head>
    <title>::Simple Additive Weighting::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="asset/css/login.css">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-..." crossorigin="anonymous" />
</head>
<body id="login">
<img src="asset/image/spksaw.png" id="logo-login" height="106px" width="300px">
<div class="alert alert-red text-center" style="display:none;" id="alert"><i class="fa fa-info-circle fa-lg"></i><p id="value">alert</p></div>

<div id="panel-login">
    <h2 id="tekslogin">Halaman Login</h2>

    <form id="formlogin" class="p-3 shadow-lg rounded" method="POST" action="ceklogin.php">
        <div class="group-input mb-2">
            <label for="username" class="form-label">Username :</label>
            <input type="text" class="form-control" required autocomplete="off" placeholder="Username" id="username" name="username" >
        </div>
        <div class="group-input mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" class="form-control" required autocomplete="off" placeholder="Password" id="password" name="password" >
        </div>
        <button class="btn btn-primary"><i class="fa fa-arrow-alt-circle-right text-white"></i> Login</button>
    </form>

</div>
<p class="mt-4">&copy 2021 khaideman</p>
</body>

<script src="asset/js/jquery.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>

</html>