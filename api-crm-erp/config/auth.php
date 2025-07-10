<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Valores por defecto de autenticación
    |--------------------------------------------------------------------------
    |
    | Esta opción controla el "guard" de autenticación y la configuración de 
    | restablecimiento de contraseña por defecto para tu aplicación. Puedes 
    | cambiar estos valores según lo necesites.
    |
    */

    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards de autenticación
    |--------------------------------------------------------------------------
    |
    | Aquí puedes definir todos los "guards" de autenticación de tu aplicación.
    | Ya está definida una configuración predeterminada que usa almacenamiento
    | de sesión y el proveedor de usuarios Eloquent.
    |
    | Todos los "guards" tienen un proveedor de usuarios que define cómo se
    | obtienen los usuarios desde tu base de datos o cualquier otro sistema.
    |
    | Soportados: "session", "token", "jwt"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Proveedores de usuarios
    |--------------------------------------------------------------------------
    |
    | Cada guard de autenticación tiene un proveedor de usuarios. Este define 
    | cómo se recuperan los datos de los usuarios (modelo Eloquent o tabla).
    |
    | Si tienes múltiples tablas o modelos de usuarios puedes definir varios
    | proveedores, y asignarlos a los distintos guards que lo necesiten.
    |
    | Soportados: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // Ejemplo con tabla directamente:
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración de restablecimiento de contraseñas
    |--------------------------------------------------------------------------
    |
    | Puedes configurar múltiples opciones de recuperación de contraseña si
    | tienes más de un tipo de usuario. Puedes cambiar tiempos de expiración,
    | tabla de tokens, etc.
    |
    | "expire" indica cuántos minutos es válido el token. 
    | "throttle" limita cuántas veces se puede solicitar un token.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tiempo de expiración de confirmación de contraseña
    |--------------------------------------------------------------------------
    |
    | Este valor define cuánto tiempo (en segundos) puede pasar antes de que 
    | se solicite nuevamente la contraseña para confirmar una acción sensible.
    | El valor por defecto son tres horas (10800 segundos).
    |
    */

    'password_timeout' => 10800,

];
