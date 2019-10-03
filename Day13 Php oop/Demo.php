<?php


class Demo
{
    public  $student_name ;
    public  $student_id ;
    protected $student_age ;
    private $cgpa ;


     public  function set_student_age(){

         $this->student_age=24 ;
         return $this->student_age ;
     }

     public function  set_cgpa ($cgpa){

         $this->cgpa = $cgpa ;
         return $this->cgpa ;
     }

     public $teacher_name ;

     Public $teacher_position ;

     public function teacher_info($tname ,$tposition){

         $this->teacher_name= $tname ;
         $this->teacher_position = $tposition ;

         return "Teacher Name = $this->teacher_name  .<br> Teacher Position = $this->teacher_position" ;
     }

     public $University ;

     public function set_university(){

         $this->University  ;
         return "The university is = $this->University" ;
     }



}