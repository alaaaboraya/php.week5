<?php

namespace Core;

class session
{
    public static function has($key)
    {
      static :: get($key) ; 
    }
    public static function put ($key , $value)

    {
        $_SESSION[$key] = $value;
    }

public static function get($key , $default = null)
{ 
    
    
    return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
}

public static function flash($key,$value)

{
    $_SESSION['_flashed'][$key] = $value;
}

public static function unflased()
{
    unset ($_SESSION['_flashe']);
}

public static function flush()
{
    $_SESSION = [];
}
}




?>