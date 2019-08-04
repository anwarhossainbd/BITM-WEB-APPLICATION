var btn_element=document.getElementById("submit") ;

btn_element.onclick = function () {

    var fst = document.getElementById("first-name").value ;
    var lst = document.getElementById("last-name").value ;
    var full = fst + " " +lst ;
    document.getElementById("full-name").value =full ;



}

/*	document.write(document.getElementById("anwar1").innerHTML) ;

      var a=10 ;
      var b=20 ;
      var c =a/b ;
      document.write(c) ;

      var t= true ;
      document.write("<br>")

      document.write(!t) ;
*/


/*	var a = "anwar" ;

	switch (a) {

        case "harun" :
            document.write("hello harun") ;

            break ;
        case "anwar1":
            document.write("Hello Anwar ") ;
            break ;

        case "sarowar" :
            document.write("hello sarowar")
            break ;

        default :
            document.write("nothing to show ")

    }*/



/* var data =[] ;

 data[0] ="anwar" ;
 data[1]="sarowar" ;
 data[2] ="Idrish" ;
 data[3] ="beauty" ;

 document.write(data[0]) ;
 document.write("<br>") ;
 document.write((data[2])) ;
 document.write("<br>") ;

for (var name in data){
    document.write(data[name]) ;
}
*/


/* var data =[10 ,20 ,30 ,40 ,50] ;
 document.write(data[2]) ;*/


/*var data =["anwar","sarowar" ,"idrish"] ;

document.write(data.length -1) ;*/



/*  var p = document.getElementsByTagName("p") ;*/

/* for ( var a in p) {
     document.write(p[a].innerHTML +"<br>") ;
 }*/

/*for (var i=0 ; i<p.length ;i++){
    document.write(p[i].innerHTML + "<br>")

}*/

/*function addition() {
     var firstName = "anwar" ;
     var lastName ="hossain" ;
     var fullName = firstName + " " +lastName ;

     document.write(fullName) ;
}

addition() ;*/
