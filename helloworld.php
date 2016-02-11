 <?php
 
 // Variable starts with $,
 //string has to quotation marks
 // line ends with semicolon
 
   $first_name = "Dmitri";
    $last_name = "Kablutško";
   
   //show code to browser
   // for adding up numbers + signs
   // for adding up strings .
   echo $first_name." ".$last_name; 
  // > greater than
  //< smaller than
  //>= greater than or equal
  //<=smaller than or equal
  //== equal
  //!= not equal
  
  $age = 5;
  
  //if age is smaller than or equal to 6, then y
 if($age <=5){
	 
	 //it is true
	 echo "yes you can sleep at lunchtime";
	 }else{
	 //it is false
	 echo " no, you are at school";
 }
 
 ?>
 
 <br>
 
 <?php
  
  
  //loop
  
  for ($i=1; $i <= $age; $i=$i+1) {
	  
	  // if condition is true
	  echo $i;
	  
  } 
 
 
 ?>
 
 <br>
 
 <?php
 
 echo "Today is " .date("l d.m.Y H:i");
 
 
 
 ?>