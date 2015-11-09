<?php
//phpinfo();
error_reporting(E_ALL&~E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
	define (PHP,'C:\apache\localhost\www\mySite\public\QUESTS\parts\php.txt');
	define (PRINCIPLES,'C:\apache\localhost\www\mySite\public\QUESTS\parts\principles.txt');
	define (OOP,'C:\apache\localhost\www\mySite\public\QUESTS\parts\oop.txt');
	define (MYSQL,'C:\apache\localhost\www\mySite\public\QUESTS\parts\mysql.txt');
	define (CSS,'C:\apache\localhost\www\mySite\public\QUESTS\parts\css.txt');
	define (HTML,'C:\apache\localhost\www\mySite\public\QUESTS\parts\html.txt');
	define (RAZNOE,'C:\apache\localhost\www\mySite\public\QUESTS\parts\raznoe.txt');
function quest_out($part){
//1 switch ? написать отд. функцию.
    switch ($part) {
	case PHP:{ 
		$a = rand(1,50);	
		echo "Вопрос по разделу 1.PHP:  ";break;} 
	case PRINCIPLES:{
		$a = rand(1,5);	
		echo "Вопрос по разделу 2.Общие принципы построения программ:  ";break;}	
	case OOP:{
		$a = rand(1,20);
		echo "Вопрос по разделу 3.OOP:  ";break;}
	case MYSQL:{
		$a = rand(1,40);	
		echo "Вопрос по разделу 5.MySQL:  ";break;}	
	case CSS:{
		$a = rand(1,15);	
		echo "Вопрос по разделу 6.CSS:  ";break;}				
	case HTML:{
		$a = rand(1,17);	
		 echo "Вопрос по разделу 8.HTML:  ";break;}					
	case RAZNOE:{
		$a = rand(1,28);	
		echo "Вопрос по разделу 9.Разное:  ";break;}						
	default:{ 
		echo "НЕТ такого раздела.";	break;}
	}	
//2 весь вопрос из неск-ких строк, с примером- если есть(как в 47 -50)		
		//$a=10;
		//$a=8;
		//$a=9;
		//$a=11;
		$a1 = $a+1;
		$a = $a.'.';
		$a1 = $a1.".";			
		$handle = @fopen($part, "r");		
		if ($handle) {		
				while (($buffer = fgets($handle)) !== false){														                                                                                          									
						if((($buffer[0]==$a[0]) and ($buffer[1]==$a[1]))===false){
									continue;
						}
						else{ 
								echo $buffer."<br />";
								while (($buffer = fgets($handle)) !== false){																
										$buffer = htmlspecialchars($buffer);									   	
										if((($buffer[0]==$a1[0]) and ($buffer[1]==$a1[1]))===true)												
											break;				   //Выходим из цикла. т.к. встретилась $a1 																														
										else	
										    echo $buffer."<br />"; //выводим пока не встретим $a1																																				
								}
					   }							 						
				}	
				if (!feof($handle)) {
					echo "Error: unexpected fgets() fail\n";
				}
				fclose($handle);
	   }	
			echo "<br />";
}
echo quest_out(PHP);
echo quest_out(PRINCIPLES);
echo quest_out(OOP);
echo quest_out(MYSQL);
echo quest_out(CSS);
echo quest_out(HTML);
echo quest_out(RAZNOE);

  /*echo "Вопрос по разделу 1.PHP: ".rand(1,50)."<br />";
	echo "Вопрос по разделу 2.Общие принципы построения программ: ".rand(1,5)."<br />";
	echo "Вопрос по разделу 3.OOP: ".rand(1,20)."<br />";
	echo "Вопрос по разделу 5.MySQL: ".rand(1,40)."<br />";
	echo "Вопрос по разделу 6.CSS: ".rand(1,15)."<br />";
	echo "Вопрос по разделу 8.HTML: ".rand(1,17)."<br />";
	echo "Вопрос по разделу 9.Разное: ".rand(1,28)."<br />";
	*/
?>