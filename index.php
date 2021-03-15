<?php
/*
Creare una o più classi a vostro piacimento, che rappresentino degli oggetti comuni.
Dichiarate le sue proprietà e quindi il costruttore per istruire la classe su come, appunto, creare l'oggetto.
Instanziare almeno 3 oggetti per ciascuna classe.
Bonus: Provare a far interagire due oggetti. Per esempio, come abbiamo visto in classe, dove nella Biblioteca aggiungevamo il libro (oggetto Book).
Quindi nel bonus, il consiglio è quello di creare una classe che "contenga" un'altra. Es: Il Frigorifero con il Cibo, Il Concessionario con l'Automobile, Il Giradischi con il Vinile... etc..
*/

class AutoNolegio {
    public $marca;

    public $modello;

    public $km;

    public $interni;


    public function __construct($marca, $modello, $km, $interni) {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->km = $km;
        $this->interni = $interni;
    }
}

$Nolegio_1 = new AutoNolegio('Mercedes', 'CLS', ' km 46,000','pelle');
echo $Nolegio_1->marca . '<br/>';
echo $Nolegio_1->modello . '<br/>';
echo $Nolegio_1->km . '<br/>';
echo $Nolegio_1->interni . '<br/>';

echo '<br/>';

$Nolegio_2 = new AutoNolegio('BMW', '525', ' km 60,000','pelle di daino');
echo $Nolegio_2->marca . '<br/>';
echo $Nolegio_2->modello . '<br/>';
echo $Nolegio_2->km . '<br/>';
echo $Nolegio_2->interni . '<br/>';

echo '<br/>';

$Nolegio_3 = new AutoNolegio('Astonmartin', 'DBS', ' km 146,000','pelle di cammello con inserti viola');
echo $Nolegio_3->marca . '<br/>';
echo $Nolegio_3->modello . '<br/>';
echo $Nolegio_3->km . '<br/>';
echo $Nolegio_3->interni . '<br/>';

echo '<br/>';

$Nolegio_4 = new AutoNolegio('Bentley', 'Continental GT', ' km 26,000','pelle di struzzo');
echo $Nolegio_4->marca . '<br/>';
echo $Nolegio_4->modello . '<br/>';
echo $Nolegio_4->km . '<br/>';
echo $Nolegio_4->interni . '<br/>';


//parte BONUS

class auto{
    public $name;
    private  $AutoNoleggio_2=[];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addCar(AutoNolegio $cars) {
        $this->AutoNoleggio_2[] = $cars;
    }

    public function getCar() {
        return $this->AutoNoleggio_2;
    }
    
}
//parte bonus
$RolceRoils = new AutoNolegio('RolceRoils', 'Gost', 'km 50','pelle di cammello');


$nuovaMacchina = new auto('Nuova macchina');

$nuovaMacchina->addCar($RolceRoils);

print_r($nuovaMacchina->getCar());