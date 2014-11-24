<nav>
    <ul class="sf-menu">
        <li class="<?php if($p==1){echo "current";}?>"><a href="index.php">INICIO</a></li>
        <li class="<?php if($p==2){echo "current";}?>">
            <a href="entrar.php">INICIAR SESIÓN</a>
            
        </li>

        <li class="<?php if($p==3){echo "current";}?>">
            <a href="#">REGISTRARSE</a>
            <ul>
                <li><a href="registrodocente.php">DOCENTES</a></li>
                <li><a href="registroalumno.php">ALUMNOS</a></li>
            </ul>
        </li>  

        <li class="<?php if($p==4){echo "current";}?>"><a href="manual.pdf" target="_blank">MANUAL DE USUARIO</a></li>
    </ul>
</nav>