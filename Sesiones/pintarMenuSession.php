<?php

$user;
$page;

$bcolor = "";
$fcolor = "";
$apenom = "anonimo";
if (isset($_POST["usuario"])) {
    $user = $_POST["usuario"];
} else {
    $user = "anonimo";
}

function pintarAdvertencia()
{
    return "<h1> esto AHORA SI se hace así, </h1>";
}

function pintarMenu($u)
{
    return
        "<nav><a href='pag1session.php'> pagina 1</a> 
        <a href = 'pag2session.php'> pagina 2</a>
        <a href = 'configsession.php'> config </a>
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
                background-color: ' .  $b . ';
                color: ' . $f . ';
            };
             
            </style>';
}
