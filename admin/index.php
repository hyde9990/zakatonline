<?php
include("config.php");
session_start();
if ($_SESSION[namauser] != "") {
    echo "<meta http-equiv='refresh' content='0,home.php' />";
} else {
?>
    <html>
        <head>
            <title>zakat online</title>
        </head>
        <link rel="shortcut icon" href="images/zakat_logo.png">
        <link rel="stylesheet" href="css/style1.css" type="text/css" />
        <body>
            <div id="login" class="shadow">
                <div align="left"><img src="images/logo.png" id="gambar"></div>
                <form name="form1" method="post" action="proses_login.php" >
                    <table width="258" border="0">
                        <tr>
                            <td colspan="2"><h2>LOGIN ADMIN</h2></td>
                        </tr>
                        <tr>
                            <td width="78">Username</td>
                            <td><div align="center"><input name="username" type="text" id="form" placeholder="username"></div></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><div align="center"><input name="password" type="password" id="form" placeholder="password"></div></td>
                        </tr>
                        <tr>
                            <td colspan="2"> </td>
                        </tr>
                        <tr>
                            <td colspan="2"><div align="center"><input type="submit" name="Submit" value="Login" id="button" class="formbutton">
                                    <a href="login_admin.php">
                                        <input type="reset" name="Reset" value="Cancel" id="button" class="formbutton"></a></div></td>
                        </tr>
                    </table>
                </form>
            </div>        
    </body>
</html>
<?php
    };
?>