<script type="text/javascript">

    function getCookie(name) {
        let cname = name + "=";
        let ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length+1, c.length );
            }
        }
    return "";
    }

</script>

<html>
<body>
    <h1>Home</h1>
    <p id="error_pop"></p>
    <script type="text/javascript"> 
        var error = $_COOKIE["error"];
        document.getElementById("error_pop").innerText = error;
    </script>

    <a href="login.php">Login</a>
</body>


</html>