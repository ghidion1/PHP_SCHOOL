<?php

abstract class ContBancar {
    protected $numeTitular;
    protected $sold;

    public function __construct($numeTitular, $soldInitial) {
        $this->numeTitular = $numeTitular;
        $this->sold = $soldInitial;
    }

    // Metoda pentru depunere
    public function depunere($suma) {
        if ($suma > 0) {
            $this->sold += $suma;
            echo "Depunere de $suma realizată cu succes în contul lui {$this->numeTitular}. Sold actual: {$this->sold}\n";
        }
    }

    // Metoda pentru extragere
    public function extragere($suma) {
        if ($suma > $this->sold) {
            throw new Exception("Fonduri insuficiente pentru extragere în contul lui {$this->numeTitular}.\n");
        } else {
            $this->sold -= $suma;
            echo "Extragere de $suma realizată cu succes din contul lui {$this->numeTitular}. Sold actual: {$this->sold}\n";
        }
    }

    // Metoda abstractă pentru calcularea dobânzii
    abstract public function calculeazaDobanda();

    // Metoda pentru afișarea soldului
    public function getSold() {
        return $this->sold;
    }
}
?>
