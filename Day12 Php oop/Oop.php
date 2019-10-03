<?php

require_once ("Student.php") ;

class Oop extends Student
{

    public $country ="bangladesh" ;

    protected $defence = "normal defence" ;

    private $totalarmy = 1200000 ;

    public function email_getting(){

       $this->email;
       return $this->email;
    }

    public function  display ($d){

     echo $d ;
    }


    public function total_army(){

        echo $this->totalarmy ;
    }

}