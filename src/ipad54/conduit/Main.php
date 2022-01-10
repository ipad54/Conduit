<?php

namespace ipad54\conduit;

use ipad54\conduit\block\Conduit;
use ipad54\conduit\tile\Conduit as TileConduit;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockFactory;
use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockLegacyIds as Ids;
use pocketmine\block\BlockToolType;
use pocketmine\block\tile\TileFactory;
use pocketmine\inventory\CreativeInventory;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIds;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	public function onLoad(): void
	{
		BlockFactory::getInstance()->register(new Conduit(new BID(Ids::CONDUIT, 0, ItemIds::CONDUIT, TileConduit::class), "Conduit", new BlockBreakInfo(3, BlockToolType::PICKAXE)));
		TileFactory::getInstance()->register(TileConduit::class, ["Conduit", "minecraft:conduit"]);
		CreativeInventory::getInstance()->add(ItemFactory::getInstance()->get(ItemIds::CONDUIT, 0));
	}
}