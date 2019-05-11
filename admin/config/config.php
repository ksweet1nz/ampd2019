<?php
    define('PERCH_LICENSE_KEY', 'P31802-RVJ077-ZSL650-TDL291-ULA017');

    $http_host = getenv('HTTP_HOST');

    switch($http_host)
    {
      case('ampd.lan') :
        define("PERCH_DB_USERNAME", 'ampduser');
        define("PERCH_DB_PASSWORD", '3dsmax09');
        define("PERCH_DB_SERVER", "localhost");
        define("PERCH_DB_DATABASE", "ampd_2019");
        define("PERCH_DB_PREFIX", "perch3_");
        break;

      default :
        define("PERCH_DB_USERNAME", 'sweetsqu_ampduser');
        define("PERCH_DB_PASSWORD", 'AcademiaV63030');
        define("PERCH_DB_SERVER", "localhost");
        define("PERCH_DB_DATABASE", "sweetsqu_ampd2");
        define("PERCH_DB_PREFIX", "perch3_");
        break;
    }


    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'kevin@ampd.center');
    define('PERCH_EMAIL_FROM_NAME', 'Kevin Sweet');

    define('PERCH_LOGINPATH', '/admin');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
    define('PERCH_RWD', true);
    // define('PERCH_DEBUG', true);
