<?php
ini_set("display_errors","On");
error_reporting(E_ALL | E_STRICT);
header('content-type:text/html;charset=utf8');

//程序从这里进来，首先我们应该动态加载类

//第一步，我们应该先完成程序的初始化
//第二部，我们要完成，类的自动注册

function autoload($classname){
    if(substr($classname,-10)=='Controller'){
        include CONTROLLER.P.DS.$classname.'.class.php';
    }
    else if(substr($classname,-5)=='Model'){
        include MODEL.P.DS.$classname.'.class.php';
    }
}
spl_autoload_register('autoload');
disPatch();
//第三部，我们可以完成根据路由，创建不同的类实例，调用不同的类方法
function disPatch(){
    $classname=C."Controller";
    $instance=new $classname();
    $classaction=A."Action";
    $instance->$classaction();
}


//在处理好路由之后，我们需要做一些优化
