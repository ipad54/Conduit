<?php

namespace ipad54\conduit\sound;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\network\mcpe\protocol\types\LevelSoundEvent;
use pocketmine\world\sound\Sound;

class ConduitActivateSound implements Sound {

	public function encode(Vector3 $pos): array
	{
		return [LevelSoundEventPacket::nonActorSound(LevelSoundEvent::CONDUIT_ACTIVATE, $pos, false)];
	}
}