<?php

/**
 * Created by PhpStorm.
 * User: chengjunsheng
 * Date: 2016/7/29
 * Time: 15:39
 */
class framework {


    public static function init(){
        self::definePath();



    }


    public static function definePath() {
        define('DS',DIRECTORY_SEPARATOR);
        define('ROOT',getcwd().DS);
        define('APP_PATH',ROOT.'application'.DS);
        define('FRAMEWORK',ROOT.'framework'.DS);
        define('PUBLIC',ROOT.'public'.DS);
        define('CONTROLLER',APP_PATH.'controller'.DS);
        define('VIEW',APP_PATH.'view'.DS);
        define('MODEL',APP_PATH.'model'.DS);
        define('CONFIG',APP_PATH.'config'.DS);
        define('CORE',FRAMEWORK.'core'.DS);
        define('DRIVER',FRAMEWORK.'driver'.DS);
        define('LIB',FRAMEWORK.'lib'.DS);
        define('P',isset($_GET['p'])?strtolower($_GET['p']):'admin');
        define('C',isset($_GET['c'])?strtolower($_GET['c']):'index');
        define('A',isset($_GET['a'])?strtolower($_GET['a']):'index');

    }


    public static function autoload($classname){




    }

    public function load(){



    }


    //分配路由，所谓的分配路由，无非就是把低端的东西变得更加高端化
    public static function disPatch(){



        

    }

}

