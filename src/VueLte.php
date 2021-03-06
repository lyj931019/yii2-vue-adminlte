<?php

namespace vuelte;

use Yii;

class VueLte
{
    static protected function init(){
        Yii::setAlias('@vuelte',__DIR__);
    }

    static public function layout($name){
        self::init();
        return "@vuelte/lte/layouts/$name.php";
    }

    static public function view($name){
        self::init();
        return "@vuelte/lte/views/$name";
    }

    static public function template($name="default"){
        self::init();
        return "@vuelte/lte/template/$name";
    }
}