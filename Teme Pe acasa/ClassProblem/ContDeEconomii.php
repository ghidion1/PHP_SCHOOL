<?php

require_once 'ContBancar.php';

// Clasa ContDeEconomii
class ContDeEconomii extends ContBancar {
    private $rataDobanzii = 0.03; // 3% dobândă

    public function calculeazaDobanda() {
        return $this->sold * $this->rataDobanzii;
    }

    // Metodă pentru actualizarea ratei dobânzii
    public function actualizeazaDobanda($nouaRata) {
        $this->rataDobanzii = $nouaRata;
    }
}

?>
