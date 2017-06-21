<?php

namespace padreon;
 
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\ItemBlock;
use pocketmine\item\Item;
use pocketmine\block\Block;
 
class Main extends PluginBase implements Listener{
       
        public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
        }
        public function onEnable(){
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
                    $this->getLogger()->info("Enabled Plugin");
        }
        public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
        }
 
        public function onInteract(PlayerInteractEvent $event){
         $chest = 54; //Id Chest
         if(($event->getPlayer()->getGamemode() === 1) && ($event->getBlock()->getId() === $chest));
         $event->setCancelled();
        }
}
