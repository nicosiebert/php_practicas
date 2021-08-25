<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>login</title>
</head>
<body>
    <div class="body">
        <div class="form-ctn">
            <form method="POST" id ="form1">

                <label for="email-ctn">Email</label><br>
                <input class="f-c" type="email" id="emailc" name="in_email" required><br>

                <label  for="password">Password</label><br>
                <input type="password" name="in_pass" id="passw" required><br>

                <button id = "btne">IniciarSesion</button><br>

            </form>
            
            <div id="respuesta"></div>
        </div>
    </div>

<script src="../jquery-3.6.0.min.js"></script>
<script src="main.js"> </script>
</body>
</html>