<?php

class arma3life_config 
{
	
	public function __construct()
	{
		
	}
	
	public function mysqlsettings()
	{
		
		//
		$sql = e107::getDB();
		$sql->select('a3life_exesystem', 'sql_ip, sql_port, sql_user, sql_password, sql_database, debug, disable_login, setting_rows, money_format, housing');
		$row = $sql->fetch();
		//while($row = $sql->fetch())
		//{
			
/////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// MYSQL SETTINGS /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////

		$dbhost = $row['sql_ip'];        //Database IP or Domain
		$dbname = $row['sql_database'];              //Database Name
		$dbuser = $row['sql_user'];           		//Database User with writing rights
		$dbpswd = $row['sql_password'];  		//Database User Password

/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////// SETTINGS ////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////

$debug = $row['debug'];                       //Enable Debug 
$disable_login = $row['disable_login'];               //Disable Login System 1=disabled 0=enabled
$setting_rows = $row['setting_rows'];                //How Many Rows should be displayed in a result page
$settings_money_format = $row['money_format'];     //SETUP THE NUMBER FORMAT Values: "EUR" = 1.000€ | "US" = $1.000 | Nothing = 1000 

/////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Altis Life Mods ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////

$housing_mario = $row['housing'];               //Activate Housing by Mario https://bitbucket.org/MarioZ2002/altis-life-housing/wiki/Home

/////////////////////////////////////////////////////////////////////////////////////
//////////////////// DONT CHANGE NOTHING IF YOU /////////////////////////////////////
////////////////////    DONT KNOW WHAT YOU DO   /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
	//	}
	define('PROJECT_PATH', dirname(__FILE__));
	}

//define('PROJECT_PATH', dirname(__FILE__));
}
define('PROJECT_PATH', dirname(__FILE__));
?>
