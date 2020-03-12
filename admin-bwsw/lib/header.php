    <?php
    function getHeader() {
        ?>
<body style="background-image:url(../../../img/fondo2.jpg)">
        <meta charset="UTF-16">
        <header>
            <div>
                <div class="container text-center">
                    <div>
                    </div>
                    <h2>Unidad 1</h2></center>
                    <p>Black and White Software</p>
                </div>
            </div>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="../../../prueba.php">Home</a></li>
                            <li><a href="../administrativos/">Usuarios</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../../../index.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php
    }
    
    
   