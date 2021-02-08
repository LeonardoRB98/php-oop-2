
<?php
    class Prodotto {

      //attributi
      public $nome;
      public $descrizione;
      public $prezzo;
      public $tipologia;
      
      //costruttore
      function __construct($nome, $descrizione, $prezzo, $tipologia) {
          $this->nome = $nome;
          $this->descrizione = $descrizione;
          $this->prezzo = $prezzo;
          $this->tipologia = $tipologia;
      }
    }

    class Cibo extends Prodotto {
        //attriuti
        public $peso;
        public $dataDiScadenza;

        function __construct($nome, $descrizione, $prezzo, $tipologia, $peso, $dataDiScadenza) {
            parent::__construct($nome, $descrizione, $prezzo, $tipologia);
            $this->peso = $peso;
            $this->dataDiScadenza = $dataDiScadenza;
        }
        
    }
    $prodotto1 = new Prodotto('Iphone Xr','molto bello, compralo ', 700, 'smartphone');
    
    $prodotto2 = new Cibo('Schicciata ', 'molto buona, mangiala', 2,69, 'alimento', 1, '14/12/2000');
    var_dump($prodotto1, $prodotto2);

