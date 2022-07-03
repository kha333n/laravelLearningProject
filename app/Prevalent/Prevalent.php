<?php

namespace App\Prevalent;

/***
 * A centralized repository for all hardcoded values in this project.
 * This is a singleton class.
 * Usage: Import it anywhere
 * use /App/Prevalent/Prevalent;
 * Then use at any place where hardcoded values needed
 * Prevalent::$[Variable name];
 ***/

class Prevalent
{
    public static string $home = 'home';
    public static string $noAccess = 'noaccess';
    public static string $users = 'users';
    public static string $about = 'about';
    public static string $user =  'user';
    public static string $protectedPage = 'protectedPage';
    public static string $contact = 'contact';

}
