<?php
define('JPATH_COMPONENT', 'admin');
require_once "UnitTest/testJoomlaFramework.php";
require_once "admin/controllers/controller.php";
require_once "admin/helpers/pvoks.php";
require_once "admin/controllers/supports.php";

class pvoksTestSupports extends PHPUnit_Framework_TestCase {
	function __construct() {
		global $testData,$componentName,$viewName;
		$componentName = 'pvoks';
		$viewName = 'pvoks';
		parent::__construct();
	}
    protected function setUp() {
		global $testData,$componentName;
		$testData->clear();
		$componentName = 'pvoks';
	}
	public function test_supports_browse()  {
		global $testData;
		$controller = new PvoksControllerSupports();
		$controller->browse();
		$this->expectOutputRegex('/PVOKS_SUPPORTS_LIST/');
		
    }
}	
?>