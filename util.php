<?php

/* Orden 1 */


//Iterando hasta encontrar la clave
function existeUser(string $user, array $usuarios): bool {   
  foreach ($usuarios as $key => $value) {
        if ($key === $user)
            return true;
  }
    return false;
}

// Con array_key_exists
// function existeUser(string $user, array $usuarios): bool
// {
//     return array_key_exists($user, $usuarios);
// }


/* Orden 2 */

function esPwdCorrecta(string $user, string $pwd, array $usuarios): bool
{
    return $usuarios[$user]["pwd"] === $pwd;
}
/* Orden 3 */
function isEqual(string $pwd1, string $pwd2)
{
    return $pwd1 === $pwd2;
}

/* Orden 4 */

function isValidLength(string $newPwd): bool
{
    return strlen($newPwd) >= MIN_LENGH;
}

/* Orden 5 */




function fueUsada(string $user, string $newPwd, array $usuarios): bool
{

    return ($usuarios[$user]["pwd-1"] === $newPwd) || ($usuarios[$user]["pwd-2"] ===$newPwd);
    
}
//con in_array
// function fueUsada(string $user, string $newPwd, array $usuarios): bool
// {

//     return in_array($newPwd, $usuarios[$user]);
// }

/* Orden 6 */

function contieneMayuscula(string $newPwd): bool
{
    return (strtolower($newPwd) !== $newPwd);
}

/* Orden 7 y 8 */


function contieneElementosArray(string $newPwd, array $elemArray): bool{
    foreach ($elemArray as $key => $value) {
        if (str_contains($newPwd, $value))
            return true;
    }
    return false;
}
