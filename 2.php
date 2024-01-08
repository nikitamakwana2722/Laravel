<?php 

  class pg
  {  
    public $a=10;
    public $b=20;
    
    function add()
	{
	     
		 echo $this->a;
		 echo "<br>";
		 echo $this->b;
	}	
		
  }
  $x=new pg;
  $x->add();
 ?>