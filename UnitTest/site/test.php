<?php
require_once "tests/testJoomlaFramework.php";

class adaloginTest extends PHPUnit_Framework_TestCase {
	public $ada;
	
	function __construct() {
		global $testData,$componentName,$viewName;
		define('JPATH_COMPONENT', 'pvoks/site');
		$componentName = 'pvoks';
		$viewName = 'pvoks';
		parent::__construct();
	}
    protected fun   HIBA ction setUp() {
		global $testData,$componentName;
		$testData->clear();
		$componentName = 'Adalogin';
		$this->setupTestDataForCorrectCall();
		$this->ada = new AdaloginModelAda_obj($testData);
	}
    public function test_0()  {
		global $testData;
    }
}	
?>
