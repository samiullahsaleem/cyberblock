<?php
echo "Increment in a simple form:";
echo "<br/>";
for ($i=1; $i<=5; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo " * ";	 
}	  	
echo "<br/>"; 	
}
echo "<br/>";
echo "<br/>";
?>

<?php
echo "Decrement in a simple form:";
echo "<br/>";
for($i=0;$i<=5;$i++)
{  
for($j=5-$i;$j>=1;$j--)
{  
echo " * ";  
}  
echo "<br>";  
}
echo "<br/>";
echo "<br/>";
?>


<?php
echo "Increment in a cone shape:";
echo "<br/>";
for ($i=1; $i<=5; $i++) 	       
{ 	 
for ($k=5; $k>$i; $k--)	 
{	
echo "&nbsp";    
}	
for($j=1;$j<=$i;$j++)	  
{	  	
echo " * ";	  
}	  	
echo "<br/>";	
}
echo "<br/>";
echo "<br/>";
?>

<?php
echo "Decrement in a cone shape:";
echo "<br/>";
for ($i=0; $i<=5; $i++) 	       
{
for ($k=0; $k<$i; $k++)	 
{	
echo "&nbsp";    
} 	
for($j=5-$i;$j>=1;$j--)	  
{	  	
echo " * ";	  
}	  	
echo "<br/>";	
}
echo "<br/>";
echo "<br/>";
?>


<?php
echo "Increment (1 to 5) to Decrement (5 to 1):";
echo "<br/>";
for($i=0;$i<=5;$i++)
{  
for($k=5;$k>=$i;$k--)
{  
echo "  ";  
}  
for($j=1;$j<=$i;$j++)
{  
echo " * ";  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--)
{  
for($k=5;$k>=$i;$k--)
{  
echo "   ";  
}  
for($j=1;$j<=$i;$j++)
{  
echo " * ";  
}  
echo "<br>";  
}  
?>
