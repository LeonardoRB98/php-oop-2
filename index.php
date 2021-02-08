
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

        //metodi
        public function sconto() {
            // $sconto = ($this->prezzo * 10) / 100;
            $sconto = $this->prezzo * 10 /100;
            return $sconto;
        }
    }

    class Cibo extends Prodotto {
        //attriuti
        public $peso;
        public $dataDiScadenza;

        function __construct($nome, $descrizione, $prezzo, $tipologia, $peso, $dataDiScadenza) {
            // con "parent::" vado a richiamare la funzione del genitore Prodotto, si può usare anche per i metodi ridifinendo il metodo 
            // stesso e richiamandolo con il "parent::"
            parent::__construct($nome, $descrizione, $prezzo, $tipologia);
            $this->peso = $peso;
            $this->dataDiScadenza = $dataDiScadenza;
        }
        
    }

    class Casa extends Prodotto {
        //attributi
        public $tossicita;
        
        function __construct($nome, $descrizione, $prezzo, $tipologia, $peso, $dataDiScadenza, $tossicita) {
            parent::__construct($nome, $descrizione, $prezzo, $tipologia, $peso, $dataDiScadenza);
            $this->tossicita = $tossciita;
        }
        
    }
    $prodotto1 = new Prodotto('Iphone Xr','molto bello, compralo ', 700, 'smartphone');
    
    $prodotto2 = new Cibo('Schicciata', 'molto buona, mangiala', 2.69, 'alimento', 1, '14/12/2000');

    $prodotto3 = new Prodotto('Dash','Ammorbidente per lavatrice ', 3.56, 'detersivo', 'non commestibile');
    var_dump($prodotto1, $prodotto2, $prodotto3);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP-2</title>
    </head>
    <body>
        <h2>elettronica</h2>
        <ul>
            <li>
                <h3>Nome Prodotto: <?php echo $prodotto2->nome ?></h3>
                <p>Descrizione prodotto: <?php echo $prodotto2->descrizione ?></p>
                <p>Tipologia: <?php echo $prodotto2->tipologia ?></p>
                <p>Prezzo: <?php echo $prodotto2->prezzo ?></p>
                <p>Sconto: <?php echo $prodotto2->sconto() ?> </p>


            </li>
        </ul>
    </body>
    </html>