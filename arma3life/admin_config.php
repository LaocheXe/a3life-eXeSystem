<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	header('location:'.e_BASE.'index.php');
	exit;
}

// Added Language URL - eXe
include_lan(e_PLUGIN.'arma3life/languages/'.e_LANGUAGE.'.php');

class arma3life_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'a3life_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'a3life_exesystem_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'main/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'main/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Arma 3 Life';
}




				
class a3life_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Arma 3 Life';
		protected $pluginName		= 'arma3life';
	//	protected $eventName		= 'arma3life-a3life_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'a3life_exesystem';
		protected $pid				= 'id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'sql_ip' =>   array ( 'title' => LAN_ARMA3EXE_SQLIP, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'help' => LAN_A3L_SQLIPH, 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'sql_port' =>   array ( 'title' => LAN_ARMA3EXE_SQLP, 'type' => 'number', 'data' => 'int', 'width' => 'auto', 'help' => LAN_A3L_SQLPORTH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'sql_user' =>   array ( 'title' => LAN_ARMA3EXE_SQLU, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'help' => LAN_A3L_SQLUH, 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'sql_password' =>   array ( 'title' => LAN_ARMA3EXE_SQLPASS, 'type' => 'password', 'data' => 'str', 'width' => 'auto', 'help' => LAN_A3L_SQLPH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'sql_database' =>   array ( 'title' => LAN_ARMA3EXE_SQLD, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'help' => LAN_A3L_SQLDH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'mods' =>   array ( 'title' => LAN_ARMA3EXE_MODS, 'type' => 'textarea', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => LAN_A3L_MODSH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'server_ip' =>   array ( 'title' => LAN_ARMA3EXE_SERVERIP, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'filter' => true, 'inline' => true, 'help' => LAN_A3L_SIPH, 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'server_port' =>   array ( 'title' => LAN_ARMA3EXE_SERVERP, 'type' => 'number', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => LAN_A3L_SPORTH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'debug' =>   array ( 'title' => LAN_ARMA3EXE_DEBUG, 'type' => 'boolean', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => LAN_A3L_DEBUGH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'disable_login' =>   array ( 'title' => LAN_ARMA3EXE_LOGIN, 'type' => 'boolean', 'data' => 'int', 'width' => 'auto', 'help' => LAN_A3L_LOGINH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'setting_rows' =>   array ( 'title' => LAN_ARMA3EXE_ROWS, 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'help' => LAN_A3L_ROWSH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'money_format' =>   array ( 'title' => LAN_ARMA3EXE_MFORMAT, 'type' => 'dropdown', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => LAN_A3L_MONEYFH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'housing' =>   array ( 'title' => LAN_ARMA3EXE_HOUSING, 'type' => 'boolean', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => LAN_A3L_HOUSINGH, 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('mods', 'server_ip', 'server_port', 'debug', 'money_format', 'housing');
		
		
		protected $prefs = array(		); 

	
		public function init()
		{
			// Set drop-down values (if any). 
			$this->fields['setting_rows']['writeParms'] = array(LAN_A3L_R5, LAN_A3L_R10, LAN_A3L_R15, LAN_A3L_R20, LAN_A3L_R25, LAN_A3L_R50); // Example Drop-down array. 
			$this->fields['money_format']['writeParms'] = array(LAN_A3L_MTUS, LAN_A3L_MTEUR, LAN_A3L_MTGBP, LAN_A3L_MTRUB, LAN_A3L_MTNZD, LAN_A3L_MTMXN); // Example Drop-down array. 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$ns = e107::getRender();
			$text = 'Hello World!';
			$ns->tablerender('Hello',$text);	
			
		}
	*/
			
}
				


class a3life_exesystem_form_ui extends e_admin_form_ui
{

}		
		
		
new arma3life_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>