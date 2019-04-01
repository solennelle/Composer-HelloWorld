<?php

/*le fichier index.php est l'entrée de l'application.
le fichier Hello.php contient une classe nommée Hello qui devra posséder une méthode talk. Cette dernière devra retourner "Hello World !".

Attention, cette classe doit se trouver dans le namespace App\Wcs !!!

Dans le dossier vendor, se trouveront les librairies installées par Composer. Il existe sur Packagist une librairie qui s'appelle ehime/hello-world. Tu dois l'installer et l'utiliser dans ton index.php.

Critères de validation

    Ton code est sur un repo personnel sur github.
    Ton arborescence correspond à ce qui a été demandé dans le challenge
    Ton dossier vendor contient la librairie : ehime/hello-world
    Ton composer.json contient une section autoload avec la déclaration de ton namespace racine App\
    Ton fichier index.php instancie et utilise deux objets :
    un objet App\Wcs\Hello
    un objet HelloWorld*/

namespace App\Wcs;
class Hello
{
    public static function talk(): string
    {
        return 'Hello World !';
    }
}


