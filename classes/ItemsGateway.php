<?php
class ItemsGateway
{
	protected $db;
	protected $item_factory;
	
	public function __construct(Db $db, ItemFactory $item_factory)
	{
		$this->db = $db;
		$this->item_factory = $item_factory;
	}
	
	public function selectAll()
	{
		$rows = $this->db->query("SELECT * FROM items ORDER BY id");
		$item_collection = array();
		foreach ($rows as $row) {
			$item_collection[] = $this->item_factory->newInstance($row);
		}
		return $item_collection;
	}
}
