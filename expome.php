<?php
    class Computer{

        private $codiceUnivoco;
        private $marca;
        private $modello;
        private $prezzo;

        public function __construct($codiceUnivoco, $prezzo){
            $this -> setCodiceUnivoco($codiceUnivoco);
            $this -> setPrezzo($prezzo);
        }

        public function setCodiceUnivoco($codiceUnivoco){

            if(!(strlen($codiceUnivoco) == 6 && is_numeric($codiceUnivoco)))
                throw new Exception("Riprova");
            
            $this -> codiceUnivoco = $codiceUnivoco;

        }

        public function getCodiceUnivoco(){
            return $this -> codiceUnivoco;
        }

        public function setMarca($marca){

            if(strlen($marca) < 3 || strlen($marca) > 20)
                throw new Exception("La marca deve essere maggiore di 3 caratteri e minore di 20");
            
            $this -> marca = $marca;
        }

        public function getMarca(){
            return $this -> marca;
        }
        
        public function setModello($modello){

            if(strlen($modello) < 3 || strlen($modello) > 20)
                throw new Exception("Il modello deve essere maggiore di 3 caratteri e minore di 20");
            
            $this -> modello = $modello;
        }

        public function getModello(){
            return $this -> modello;
        }

        public function setPrezzo($prezzo){

            if(is_int($prezzo) || $prezzo > 2000 || $prezzo < 0)
                throw new Exception("Il prezzo deve essere un intero compreso tra 0 e 2000");
            
            $this -> prezzo = $prezzo;
        }

        public function getPrezzo(){
            return $this -> prezzo;
        }

        public function printMe(){
            echo $this;
        }

        public function __toString(){
            return $this -> getMarca() . " " . $this ->  getModello() . ": " . $this ->  getPrezzo() . " [" . $this ->  getCodiceUnivoco() . "]";
        }
    }

    try{    

        $computer1 = new Computer("000s00", 2000);
        $computer1 -> setMarca("Nyke");
        $computer1 -> setModello("AirSpeed1");
        
        echo $computer1;
        
    }catch(Exception $e){

        echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
    }
?>