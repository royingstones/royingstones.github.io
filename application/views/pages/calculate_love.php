
<div  style="font-size: 120%; text-align: center; ">
<br><br>
<?php
$url=$this->config->base_url(); 

$x=strlen($name1);
$y=strlen($name2);
$count=null;
$flag=null;
$flag1=1;

for ($i = 0; $i < $x; $i++)
{
   	if($name1[$i]!=' ')
   {	if($name1[$i]!='_')
		{
         	for($z =0; $z< $y; $z++)
     		{
         		if(strcasecmp($name1[$i], $name2[$z]) == 0)
         		{		   		
         			$data=$name1[$i];		
         			for($a = 0; $a<$x; $a++){		
         				if((strcasecmp($data, $name1[$a]) == 0) && $data != '_'){
         				$name1[$a]='_';
         				$count++;
         				$flag++;
         						} 
       				}
					for($a = 0; $a<$y; $a++){
			 			if((strcasecmp($data, $name2[$a]) == 0) && $data != '_'){	
			         	$name2[$a]='_';       								
			         	$count++;		         
			       			 	}
       				}	
     			} 
     			else{
     					$flag1=0;
     			}
     		
     	 }
 	 	}
  }
}	
$count=$count%6;
 
if($flag!=null){
       if($count == 0){
        echo '<img src=" '.$url.'assets/images/sweethearts.gif" class="img-fluid rounded-circle">';
        echo '<br>';
       	echo '<h2 style="font-size:150%; font-family: lucida console;">You found your soulmate!!</h1>';
       }
       if($count == 1){
        echo '<img src=" '.$url.'assets/images/sad.gif" class="img-fluid rounded-circle">';
        echo '<br>';
       	echo '<h2 style="font-size:150%; font-family: lucida console; "> Even Flash cannot run from the friendzone bro!!!</h2>';
       }
       if($count == 2){
        echo '<img src=" '.$url.'assets/images/lovers.gif" class="img-fluid rounded-circle">';
        echo '<br>';
       	echo '<h2 style="font-size:150%; font-family: lucida console; ">The both of you are lovers !!!</h2>';
       }
       if($count == 3){
        echo '<img src=" '.$url.'assets/images/angry.gif" class="img-fluid rounded-circle">';
        echo '<br>';
       	echo '<h2 style="font-size:150%; font-family: lucida console;">Someone feels angry!!!</h2>';
       }
       if($count == 4){	
        echo '<img src=" '.$url.'assets/images/married.gif" class="img-fluid rounded-circle">';
     	  echo '<h2 style="font-size:150%; font-family: lucida console;">You guys are getting married!!</h2>';
       }
       if($count == 5){
        echo '<img src=" '.$url.'assets/images/engagement.gif" class="img-fluid rounded-circle">';
        echo '<br>';
    	  echo '<h2 style="font-size:150%; font-family:lucida console;"> Guess who will be having an engagement!!!</h2>';
       }
   }
   else if($x!=0 && $flag1==0){
        echo '<img src=" '.$url.'assets/images/david.gif" class="img-fluid rounded-circle">';
    		echo '<h2 style="font-size:150%; font-family: lucida console;"> You guys have no future together!!!</h2>';
    }
  
?>
</div>
