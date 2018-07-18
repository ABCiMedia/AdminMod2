<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://ajax.googlespis.com/ajax/libs/jquery/3.11/jquery.min.js"></script>
        <script src="js.js"></script>
        <title></title>
    </head>
    <body>

        <div id="sidebar">
            <div class="toggle-btn" onclick="toggleSidebar()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logo1">
                <img src="img/logo.png">
            </div>
            <ul>

                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
        </div>
        <nav class="nav-logo">
            <div class="logo">
                <img src="img/logo.png">
            </div>

        </nav>
        <!-- USER -->
        <div class="direita">
            <ul class="menu-pricipal">
                <li><span class="perfil"></span><a href="#user"><img src="img/avatar.png" style="width: 50px;"></a>
                    <ul class="submenu">
                        <li><a href="#">Meus Dados</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>


    </body>
</html>