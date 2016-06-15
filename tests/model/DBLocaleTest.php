<?php


use SilverStripe\ORM\FieldType\DBField;


/**
 * @package framework
 * @subpackage tests
 */
class DBLocaleTest extends SapphireTest {
	public function testNice() {
		$l = DBField::create_field('Locale', 'de_DE');
		$this->assertEquals($l->Nice(), 'German');
	}

	public function testNiceNative() {
		$l = DBField::create_field('Locale', 'de_DE');
		$this->assertEquals($l->Nice(true), 'Deutsch');
	}

	public function testNativeName() {
		$l = DBField::create_field('Locale', 'de_DE');
		$this->assertEquals($l->getNativeName(), 'Deutsch');
	}
}
