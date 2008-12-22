<?php
/* SVN FILE: $Id: i18n.php 7945 2008-12-19 02:16:01Z gwoo $ */
/*i18n schema generated on: 2007-11-25 07:11:25 : 1196004805*/
/**
 * This is i18n Schema file
 *
 * Use it to configure database for i18n
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config.sql
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 21:16:01 -0500 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/*
 *
 * Using the Schema command line utility
 * cake schema run create i18n
 *
 */
class i18nSchema extends CakeSchema {

	var $name = 'i18n';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $i18n = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'locale' => array('type'=>'string', 'null' => false, 'length' => 6, 'key' => 'index'),
			'model' => array('type'=>'string', 'null' => false, 'key' => 'index'),
			'foreign_key' => array('type'=>'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
			'field' => array('type'=>'string', 'null' => false, 'key' => 'index'),
			'content' => array('type'=>'text', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'locale' => array('column' => 'locale', 'unique' => 0), 'model' => array('column' => 'model', 'unique' => 0), 'row_id' => array('column' => 'foreign_key', 'unique' => 0), 'field' => array('column' => 'field', 'unique' => 0))
		);

}
?>