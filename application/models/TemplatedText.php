<?php
/*****************************************************************************
*       TemplatedText.php
*
*       Author:  ClearHealth Inc. (www.clear-health.com)        2009
*       
*       ClearHealth(TM), HealthCloud(TM), WebVista(TM) and their 
*       respective logos, icons, and terms are registered trademarks 
*       of ClearHealth Inc.
*
*       Though this software is open source you MAY NOT use our 
*       trademarks, graphics, logos and icons without explicit permission. 
*       Derivitive works MUST NOT be primarily identified using our 
*       trademarks, though statements such as "Based on ClearHealth(TM) 
*       Technology" or "incoporating ClearHealth(TM) source code" 
*       are permissible.
*
*       This file is licensed under the GPL V3, you can find
*       a copy of that license by visiting:
*       http://www.fsf.org/licensing/licenses/gpl.html
*       
*****************************************************************************/


class TemplatedText extends WebVista_Model_ORM {
	protected $templateId;
	protected $name;
	protected $template;
	protected $_table = "templatedText";
	protected $_primaryKeys = array("templateId");

	public function populateByName($name) {
		$sql = "SELECT * from " . $this->_table . " WHERE 1 ";
		$sql .= " and `name` = '" . preg_replace('/[^0-9a-zA-Z\.]/','',$name) . "'";
		$retval = $this->populateWithSql($sql);
		$this->postPopulate();
		return $retval;
	}

	public function getTemplatedTextId() {
		return $this->templateId;
	}
}
