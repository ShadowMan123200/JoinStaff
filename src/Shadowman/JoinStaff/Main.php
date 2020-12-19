<?php

namespace Shadowman\JoinStaff;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getLogger()->info("§aPlugin telah aktiv");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onDisable(){
		$this->getLogger()->info("§cPLugin di nonaktivkan");
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();

		if($player->hasPermission("joinstaff.msg")){
			$this->getServer()->broadcastmessage("§b[§aSTAFF§b] " . $player->getName() . " §ehas join the server");
		}
	}
}