<!Doctype html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>



body {
  margin: 0;
  padding: 0;
  background-image: url(images/fondo.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  height: 200vh;
  width: 100%;

}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 420px;
  border: 1px solid #9C9C9C;
  background-color: #e1f1f6;
}
#login .container #login-row #login-column #login-box #login-form #login-regist {
  padding: 20px;
}
#login-regist{
    display: none;
}

</style>
<script>

function fmostrar() {
    document.getElementById('login-form').style.display="none";
    document.getElementById('login-regist').style.display="block";
}

</script>

</head>


<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="validation.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="password" class="text-info">Remember me</label>
                            <input type="checkbox" name="checkbox" id="checkbox">
                            </div>
                            <div class="form-group">
                            <input id="button Login" type = "submit" name= "enter" value="Entrar"/><br />
                            </div>
                            <div class="form-group">
                            <input id="button"type = "button" name= "registro" value="Registro" onclick="fmostrar()"/><br />
                            </div>
                        </form>
                        <form id="login-regist" class="form" action="validation.php" method="post">
                            <h3 class="text-center text-info">Registro</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="">
                                <select name="user-type">
                                    <option value="1">Vendedor</option>
                                    <option value="2">Comprador</option>

                                </select>
                            </div>
                            <div class="form-group">
                            <input id="button Login" type = "submit" name= "registro" value="Entrar"/><br />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
