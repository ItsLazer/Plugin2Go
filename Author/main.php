<?php
namespace Author;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
class main extends PluginBase {
    public function onLoad(){
        $this->getLogger()->info("{Plugin Name} loading.");
    }
    public function onEnable(){
        $this->getLogger()->info("{Plugin Name} enabled.");
    }
    public function onDisable(){
        $this->getLogger()->info("{Plugin Name] disabled.");
    }
}
