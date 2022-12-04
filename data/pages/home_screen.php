<html>
    <head></head>
    <body>
        <button type="button" id="login-btn">Login</button>
        <button type="button" id="register-btn">Register</button>
    </body>

    <script type="text/javascript">
        document.getElementById("register-btn").onclick = function () {
            location.href = "data/pages/register.php";
        }

        document.getElementById("login-btn").onclick = function() {
            location.href = "data/pages/login.php";
        }
    </script>
</html>