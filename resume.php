<?php
error_reporting(E_ALL&~E_NOTICE);
class JuniorPHPDeveloper
{
     public static $name = 'Slobodyanyuk Maksim Stepanovich';
     public $email = 'smstepani4@gmail.com';
     public $phone = '+38(050)215-48-34';
//Professional skills and knowledge:
    public function getSkills()
{
         return array("Programming methodologies" => "Understanding of OOP, MVC principles",
						  "Programming Languages" => "PHP  (HTML/CSS, SQL)",
						  "Relational DataBase Management Systems" => "MySQL",
						  "Work experience with databases" => "(MySQL, SQLite)");
   }
    public function getLevels()
{
         return array("- Delphi" => "advanced level of knowledge",
							"- OOP" => "- middle",
							"- middle knowledge" => "HTML, CSS, SQL",
							"- basic level of knowledge" => "PHP",
							"- common understanding MVC.",
							"- Relational DataBase Management Systems" => "MySQL -middle.");
/*"A basic knowledge of client-server architecture",
"The ability to locate optimal algorithms"*/
   }
public function getExperience($namespec ='Freelance', $workplace ='')
//Experience:
{
If('Delphi developer'==$namespec)
{
	If ('Dneproshina'==$workplace)
		{
		return "April 2004 – December 2010 (6 years 8 months) ";
		}
	If ('DMBTI'==$workplace)
		{
		return "January 2011 - December 2011 (1 year).";
		}
}
elseif('Freelance'==$namespec)
{
	return "January 2012 - current time (3 years).";
}
}
//Main responsibilities:
/*	- work with databases;
	- support programs working with databases.
	- application development on existing databases under InterBase, MySQL.*/
    public  function getInfo ($part = 'Others')
{

switch ($part){							//Goal:
case  'Goal':
return "I would like to realize my experience, find an interesting job with career opportunities.
I study the technology for the development of web projects.  I am interested to get a job PHP Developer.";
break;
									//Education:
case  'Education':
return "from 1999-2004, higher education, specialty - the programmer.
Institution: UDHTU(Ukrainian State University of Chemical Technology).";
 break;
								//Languages spoken:
case  'Languages spoken':
return "Ukrainian, Russian - fluent, English (intermediate level).";
 break;
									//Others:
case  'Others':
return "Sociable, responsible, willing to learn.";
 break;
default:
return "Born May 19, 1982 in Dniepropetrovsk.";
}
}
}
$obj = new JuniorPHPDeveloper;
echo JuniorPHPDeveloper::$name."<br />";
//echo $obj::$name."<br />"; // и через обьект???
echo $obj -> email."<br />";
echo $obj -> phone."<br />";
var_dump ($obj -> getSkills());
echo "<br />";
print_r($obj -> getLevels());
echo "<br />";
echo $obj -> getExperience()."<br />";
echo $obj -> getInfo()."<br />";
?>