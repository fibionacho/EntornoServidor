<?php
if (!isset($_SESSION["nombre"]) || $_SESSION["nombre"] != "") {
    if (isset($_COOKIE["recuerdame"])) {
        $DB->ejecuta(
            "SELECT u.id, u.nombre
                FROM usuarios u
                LEFT JOIN tokens t ON u.id = t.id_usuairo
                WHERE t.valor = ? AND t.expiracion > now()",
            $_COOKIE["recuerdame"]
        );
        $tokenInfodb = $DB->obtenElDato();

        if ($tokenInfodb != null) {
            //login
            $_SESSION["id"] = $tokenInfodb["id"];
            $_SESSION["nombre"] = $tokenInfodb["nombre"];
            //extiende su vida otra semana
            //vida de cookie
            setcookie(
                "recuerdame",
                $tokenInfodb["valor"], //tb puede ser $_COOKIE["recuerdame]
                [
                    "expires" => time() + 7 * 24 * 60 * 60, //numeros magicos
                    //"secure"=>true,
                    "httponly" => true
                ]
            );
            //vida del token
            $DB->ejecuta(
                "UPDATE tokens SET expiracion = NOW ()+ INTERVAL 7 DAY WHERE valor = ?",
                $tokenInfodb["valor"]
            );
        }
    }
}
