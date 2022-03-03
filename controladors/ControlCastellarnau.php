<?php
include_once 'helpers/request.php';


class ControlCastellarnau
{


    private $fragmentos;

    function __construct()
    {

        // Per gestinar las frases s'ha de tenir el superpoder de ser
        // un usuari registrat!
        //        if (!isset($_SESSION['username'])) {
        //            header('Location: index.php?control=ControlLogin');
        //            exit;
        //        }

        // Creem el model amb el que treballarem en aquest controlador
        include_once 'models/Castellarnau.php';
        $this->fragmentos = new Castellarnau();
    }

    // mètode que es crida per defecte si no especifiquem cap mètode en el paràmetre 
    // operacio


    // public function index()
    // {
    //     // Recuperem la llista de totes les frases
    //     $res = $this->fragmentos->getAll();
    //     include_once 'vistes/templates/header.php';
    //     include_once 'vistes/superheroes/llistat.php';
    //     include_once 'vistes/templates/footer.php';
    // }

    public function index()
    {
        include_once 'models/Usuaris.php';
        $usuari = new Usuaris();

        include_once 'vistes/templates/header.php';
        include_once 'vistes/default/principal.php';
        include_once 'vistes/templates/footer.php';
    }

    public function llistat()
    {
        // El número de pàgina ens vindrà per paràmetre GET
        // En cas que no hi sigui mostrarem la primera pàgina
        if (isset($_GET['page'])) $numPagina = $_GET['page'];
        else $numPagina = 1;
        // Cada pàgina mostrarà 1 registres
        $numRegsPag = 1;
        // Obtenim el número màxim de pàgines
        $total_pags = $this->fragmentos->numPages($numRegsPag);
        // Si el número de pàgina és incorrecta mostrem la primera
        if ($numPagina <= 0 || $numPagina > $total_pags) $numPagina = 1;

        // Obtenim les frases de la pàgina indicada
        $res = $this->fragmentos->getPage($numPagina, $numRegsPag);
        include_once 'vistes/templates/header.php';

        include_once 'vistes/castellarnau/llistat.php';
        include_once 'vistes/templates/footer.php';
    }

    // Per afegir una frase, 2 passos: 
    // - Mostrar el formulari d'alta
    // - Desar les dades del formulari en la BD


    // Mètode per mostrar el formulari per donar d'alta una nova frase
    public function showformnew()
    {

        include_once 'vistes/templates/header.php';
        include_once 'vistes/castellarnau/formnew.php';
        include_once 'vistes/templates/footer.php';
    }

    // mètode per controlar l'emmagatzemar una frase a la BD
    public function store()
    {

        // Recuperem els camps del formulari
        $frase = obtenir_camp('frase');



        if ($frase == "") {

            $_SESSION['frase'] = $frase;

            $_SESSION['missatge'] = "Camps obligatoris!!";

            header('Location: index.php?control=ControlCastellarnau&operacio=showformnew');
            exit;
        }

        // Al model li diem que afegeix una nova frase        
        $res = $this->fragmentos->add($frase);
        $res = true;
        if ($res) {
            $_SESSION['missatge'] = "Alta correcta. Opció deshabilitada";
        } else {
            $_SESSION['missatge'] = "Alta incorrecta";
        }

        header("Location: index.php?control=ControlCastellarnau");
    }

    // Per actualitzar un superheroi 2 passos: 
    // - Mostrar el formulari d'actualització amb les dades actuals del superheroi
    // - Desar les dades del formulari en la BD


    // Mètode per mostrar el formulari d'actualització d'un superheroi
    public function showformupdate()
    {
        // Via GET ens passaran el codi de l'heroi que volem modificar
        // Comprovem l'existència del paràmetre
        if (!isset($_GET['codi'])) {
            $_SESSION['missatge'] = "Has de triar una!";
            header("Location: index.php?control=ControlCastellarnau");
            exit;
        }

        // Recuperem de la BD el super que volem modificar 
        $codi = $_GET['codi'];
        $actual = $this->fragmentos->get($codi);

        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!
        if (!$actual) {
            $_SESSION['missatge'] = "Aquest usuari no existeix!";
            header("Location: index.php?control=ControlCastellarnau");
            exit;
        }

        // Quan es carregui el formulari per primer cop
        // volem que es mostrin les dades actuals del superheroi.
        //      En cas que ja existeixin, voldrà dir que s'ha recarregat aquest formulari
        //      d'actualització perque les dades dels controls del formulari no són correctes

        $_SESSION['frase'] = $actual['frase'];

        $_SESSION['missatge'] = "Frase recuperada!!";

        // Mostrem el formulari..
        include_once 'vistes/templates/header.php';
        include_once 'vistes/castellarnau/formupdate.php';
        include_once 'vistes/templates/footer.php';
    }

    public function update()
    {
        // Via GET ens passaran el codi de l'heroi que volem modificar
        // Comprovem l'existència del paràmetre
        if (!isset($_GET['codi'])) {
            $_SESSION['missatge'] = "Has de triar una frase!";
            header("Location: index.php?control=ControlCastellarnau");
            exit;
        }

        // Recuperem de la BD el super que volem modificar 
        $codi = $_GET['codi'];
        $actual = $this->fragmentos->get($codi);

        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!
        if (!$actual) {
            $_SESSION['missatge'] = "Aquesta frase no existeix!";
            header("Location: index.php?control=ControlCastellarnau");
            exit;
        }

        // Recuperem els camps del formulari
        $frase = obtenir_camp('frase');


        // Comprovem les restriccions associades a cada camp  
        if ($frase == "") {

            $_SESSION['frase'] = $frase;

            $_SESSION['missatge'] = "Camps obligatoris!!";

            header('Location: index.php?control=ControlCastellarnau&operacio=showformupdate');
            exit;
        }


        // Modifiquem les dades del superheroi guardant possibles canvis en la BD
        $res = $this->fragmentos->update($frase);

        header('Location: index.php?control=ControlCastellarnau');
    }


    // Mètode per esborrar un superherou
    public function delete()
    {
        // Via GET ens passaran el codi de l'heroi que volem esborrar
        // Comprovem l'existència del paràmetre
        if (!isset($_GET['codi'])) {
            $_SESSION['missatge'] = "Has de triar una frase!";
            header("Location: index.php?control=ControlCastellarnau");
            exit;
        }
        // Recuperem de la BD el usuari que volem modificar 
        $codi = $_GET['codi'];
        $actual = $this->fragmentos->get($codi);
        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!
        if (!$actual) {
            $_SESSION['missatge'] = "Aquest usuari no existeix!";
            header("Location: index.php?control=ControlCastellarnau");
            exit;
        }
        // eborrem el superheroi de la BD
        $res = $this->fragmentos->delete($codi);
        $res = true;
        if ($res)
            $_SESSION['missatge'] = "Frase eliminada.";
        else
            $_SESSION['missatge'] = "La frase no s'ha pogut esborrar!";

        header("Location: index.php?control=ControlCastellarnau");
    }
}
