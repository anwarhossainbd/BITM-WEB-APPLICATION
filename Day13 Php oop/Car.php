<?php


 abstract class Car
{
   /* public $tank ;

    public function fill($float){

        $this->tank += $float ;
        return $this ;
    }

    public function ride ($float){

        $kilometers = $float ;

        $gallons = $kilometers/50 ;

        $this->tank -=$gallons ;

        return $this ;
    }*/

   protected  $model ;

   public  function  set_model($model){

       $this->model=$model ;

   }

   abstract  public function speed () ;

}


class sports extends Car{

  /*  public function  add(){

        return "this is a $this->model Car "  ;
    }*/

    public  function speed()
    {
        $miles = $this->model ;

        return $miles ;
    }
}