<?php

namespace PurePerms;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
    public function onEnable(): void {
        $this->getLogger()->info("PurePerms enabled!");
    }

    public function onDisable(): void {
        $this->getLogger()->info("PurePerms disabled!");
    }
}
