<?php

$user;
$page;

$bcolor="";
$fcolor="";
$apenom="anonimo";
if (isset($_POST["usuario"])) {
    $user = $_POST["usuario"];
} else {
    $user = "anonimo";
}

function pintarAdvertencia()
{
    return "<h1> esto NO se hace así, se hace con sesiones</h1>";
}

function pintarMenu($u)
{
    return
        "<nav><a href='pagina1.php'> pagina 1</a> 
        <a href = 'pagina2.php'> pagina 2</a>
        <a href = 'config.php'> config </a>
        <p>" . $u . "</p></nav>";
}

function pintarTexto()
{
    return "<div>
                    <p>Y aquí va a ir un texto completamente random para ver si funciona en todas las páginas
                        haciendo eso del include y no mezclar la lógica con la presentación</p>
                </div>";
}

function pintarFondo($b, $f)
{
    return
        '<style>
            body{
                background-color: '.  $b. ';
                color: ' . $f . ';
            };
             
            </style>';
}
