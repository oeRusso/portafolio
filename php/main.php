<?php
    
    require_once 'php/contacto.php';
    require_once 'php/db.php';

    if (count($_POST) > 0) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'nombre de prueba';
        $email = isset($_POST['email']) ? $_POST['email'] : 'email de prueba';
        $tema = isset($_POST['tema']) ? $_POST['tema'] : '...';
        $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '...';

        $profesores = new Contacto($nombre, $email, $tema, $mensaje);

        
        $profesores->save();
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
    <title>ER-Portafolio</title>
</head>
<body>
    <!-- SECCION DE INICIO -->
    <section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <h1>ER</h1>
                    <nav id="nav" class="">
                        <ul id="links">
                            <li><a href="#inicio" class="seleccionado" onclick="seleccionar(this)">INICIO</a></li>
                            <li><a href="#sobremi" onclick="seleccionar(this)">SOBRE MI</a></li>
                            <!-- <li><a href="#servicios" onclick="seleccionar(this)">SERVICIOS</a></li> -->
                            <li><a href="#portafolio" onclick="seleccionar(this)">PORTFOLIO</a></li>
                            <li><a href="#contacto" onclick="seleccionar(this)">CONTACTO</a></li>
                        </ul>
                    </nav>
                    <!-- ICONOS DEL MENU RESPONSIVE -->
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <!-- icono de las redes sociales -->
                    <div class="redes">
                        <a href="https://www.linkedin.com/in/esteban-russo-010609203/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://github.com/oeRusso" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </header>
            <div class="presentacion">
                <p class="bienvenida">Bienvenidos</p>
                <h2>Soy <span>Esteban Russo</span>, Desarrollador Backend</h2>
                <!-- <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ad eveniet numquam rem, saepe consectetur expedita et enim exercitationem tempora dicta.</p> -->
                <a href="#portafolio">Ir a portafolio</a>
            </div>
        </div>
    </section>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi">
        <div class="contenedor-foto">
            <img src="img/mifoto.jpg" alt="">
        </div>
        <div class="sobremi">
            <p class="titulo-seccion">Sobre mi</p>
            <h2>Hola soy <span>Esteban Russo</span></h2>
            <h3>Desarrollador web</h3>
            <p> Me recibi de la tecnicatura de analista en sistemas y estoy en proceso de curso la ingenieria de software. Actualemente desarrollo APIS del lado del servidor utilizando tecnologías que entreguen un buen performance y comodidad como Laravel y PHP, estoy listo para dar mi siguiente paso y asumir retos y desafíos en el siguiente nivel.
                Aunque mi experiencia es corta, mi pasión por aprender, flexibilidad y lógica me han llevado a sacar adelante proyectos , apoyándome siempre en la comunicación asertiva, resolución de conflictos y mis colegas developers.
                Pueden contactarme atravez de mi correo electronico oerusso28@gmail.com</p>
            <a href="PDF/curriculum-desarrollador.pdf" target="_blank" download="Curriculum-Russo">Descargar CV</a>
        </div>
    </section>

    <!-- SECCION SERVICIOS -->
    <!-- <section id="servicios">
        <h3 class="titulo-seccion">MIS SERVICIOS</h3>
        <div class="fila">
            <div class="servicios">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Diseño de sitios web</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>SEO</li>
                </ul>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia voluptates accusantium, error rerum numquam dicta sequi explicabo possimus eos ut aut consequatur alias.</P>
            </div>
            <div class="servicios">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Diseño de sitios web</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>SEO</li>
                </ul>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia voluptates accusantium, error rerum numquam dicta sequi explicabo possimus eos ut aut consequatur alias.</P>
            </div>
            <div class="servicios">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Diseño de sitios web</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>SEO</li>
                </ul>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia voluptates accusantium, error rerum numquam dicta sequi explicabo possimus eos ut aut consequatur alias.</P>
            </div>
        </div>
        <div class="fila">
            <div class="servicios">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Diseño de sitios web</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>SEO</li>
                </ul>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia voluptates accusantium, error rerum numquam dicta sequi explicabo possimus eos ut aut consequatur alias.</P>
            </div>
            <div class="servicios">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Diseño de sitios web</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>SEO</li>
                </ul>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia voluptates accusantium, error rerum numquam dicta sequi explicabo possimus eos ut aut consequatur alias.</P>
            </div>
            <div class="servicios">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Diseño de sitios web</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>SEO</li>
                </ul>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia voluptates accusantium, error rerum numquam dicta sequi explicabo possimus eos ut aut consequatur alias.</P>
            </div>
        </div>
    </section> -->

    <!-- SECCION DE HABILIDADES -->
    <div class="contenedor-skills" id="skills">
        <h3>HABILIDADES</h3>
        <div class="skills">
            <div class="info">
                <p><span class="lista"></span>Html & Css</p>
                <span class="porcentaje">75%</span>
            </div>
            <div class="barra">
                <div id="html" class="barra-progreso1"></div>
            </div>
        </div>

        <div class="skills">
            <div class="info">
                <p><span class="lista"></span>Javascript</p>
                <span class="porcentaje">70%</span>
            </div>
            <div class="barra">
                <div id="js" class="barra-progreso2"></div>
            </div>
        </div>

        <div class="skills">
            <div class="info">
                <p><span class="lista"></span>SQL</p>
                <span class="porcentaje">85%</span>
            </div>
            <div class="barra">
                <div id="sql" class="barra-progreso3"></div>
            </div>
        </div>

        <div class="skills">
            <div class="info">
                <p><span class="lista"></span>PHP</p>
                <span class="porcentaje">80%</span>
            </div>
            <div class="barra">
                <div id="php" class="barra-progreso4"></div>
            </div>
        </div>

        <div class="skills">
            <div class="info">
                <p><span class="lista"></span>Laravel</p>
                <span class="porcentaje">40%</span>
            </div>
            <div class="barra">
                <div id="laravel" class="barra-progreso5"></div>
            </div>
        </div>

    </div>

    <!-- SECCION PORTAFOLIO -->
    <div id="portafolio">
        <h3 class="titulo-seccion">MIS PROYECTOS</h3>
        <div class="fila">

            <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/img-proyecto-notas.jpg" alt="">
                <div class="info">
                    <h4> <a href="proyectos/NOTAS/index.php" target="_blank">Proyecto de notas</a></h4>
                    <p>PHP-POO</p>
                </div>
            </div>

            <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/img-proyecto-ecommerce.jpg" alt="">
                <div class="info">
                    <h4> <a href="proyectos/TIENDA/index.php" target="_blank">Ecommerce</a></h4>
                    <p>PHP-POO-MVC</p>
                </div>
            </div>

            <!-- <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/img-proyecto-registroalumno.jpg" alt="">
                <div class="info">
                    <h4> <a href="proyectos/REFUERZOPOOMVC/index.php" target="_blank">Registro de alumnos</a></h4>
                    <p>PHP-POO-MVC</p>
                </div>
            </div> -->
        </div>
        <div class="fila">
            <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/img-proyecto-registroalumno.jpg" alt="">
                <div class="info">
                    <h4> <a href="proyectos/REFUERZOPOOMVC/index.php" target="_blank">Registro de alumnos</a></h4>
                    <p>PHP-POO-MVC</p>
                </div>
            </div>

            <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/trabajo-en-proceso.jpg" alt="">
                <div class="info">
                    <h4>MIGRANDO PROYECTO DE LARAVEL</h4>
                    <p>Simulacion de un instagram</p>
                </div>
            </div>

            <!-- <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/proyecto1.jpg" alt="">
                <div class="info">
                    <h4>Descripcion del proyecto</h4>
                    <p>Diseño web</p>
                </div>
            </div> -->
        </div>
        <div class="fila">
            <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/trabajo-en-proceso.jpg" alt="">
                <div class="info">
                    <h4>JAVASCRIPT</h4>
                    <p>E-Commerce</p>
                </div>
            </div>

            <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/img-proyecto-blackjack.jpg" alt="">
                <div class="info">
                    <h4> <a href="../proyectos/BLACKJACK/index.html" target="_blank">Juego de Blackjack</a></h4>
                    <p>JAVASCRIPT</p>
                </div>
            </div>

            <!-- <div class="proyectos">
                <div class="overlay"></div>
                <img src="img/proyecto1.jpg" alt="">
                <div class="info">
                    <h4>Descripcion del proyecto</h4>
                    <p>Diseño web</p>
                </div>
            </div> -->
        </div>
    </div>
    
    <!-- SECCION CONTACTO -->
    <section id="contacto">
        <h3 class="titulo-seccion">Contactanos ahora</h3>
        <div class="contenedor-form">
            <form action="./main.php" method="POST">
                <div class="fila mitad">
                    <input name="nombre" type="text" placeholder="Nombre completo" class="input-mitad">
                    <input name="email" type="email" placeholder="Direccion de email" class="input-mitad">
                </div>
                <div class="fila">
                    <input name="tema" type="text" placeholder="Tema..." class="input-full">
                </div>
                <div class="fila">
                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Tu mensaje..." class="input-full"></textarea>
                </div>

                <input type="submit" value="Enviar mensaje" class="btn-enviar">
            </form>
        </div>
    </section>

<!-- TODO: BUENO ACA FALTA INSTALAR EL COMPOSER EN ESTE PROYECTO Y DESARROLAR EL BACKEND PARA RECIBIR LOS DATOS DEL FORMULARIO -->




    <!-- SECCION FOOTER -->
    <footer>
        <p>Todos los derechos reservados - 2023</p>
        <div class="redes">
            <a href="https://www.linkedin.com/in/esteban-russo-010609203/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://github.com/oeRusso" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>