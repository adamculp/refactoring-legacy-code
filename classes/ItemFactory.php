<?php
class ItemFactory
{
	public function newInstance(array $item_data)
	{
		return new Item($item_data);
	}
}
