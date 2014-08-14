<?php
class Example
{
	protected $db;
	
	public function __construct(Db $db)
	{
		$this->db = $db;
	}
	
	public function fetch()
	{
		return $this->db->query(...);
	}
}
