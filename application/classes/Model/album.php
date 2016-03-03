<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Album extends ORM
{
	protected $_belongs_to = ['genre' => []];	
}
