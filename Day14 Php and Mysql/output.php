<?php

namespace app\classes ;
class  output {

    public function full($first , $last){

        $res = $first+$last ;

        return $res ;
    }

    public function sub($first , $last){

        $res = $first-$last ;

        return $res ;
    }

}