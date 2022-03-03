<?php
include_once 'helpers/request.php';


class ControlUsers
{

    private $users;

    function __construct()
    {
        // Per gestinar els usuaris s'ha de tenir el usuaris de ser
        // un usuari registrat!
//        if (!isset($_SESSION['username'])) {
//            header('Location: index.php?control=ControlLogin');
//            exit;
//        }

        // Creem el model amb el que treballarem en aquest controlador
        include_once 'models/Usuaris.php';
        $this->users = new Usuaris();

    }

    // mètode que es crida per defecte si no especifiquem cap mètode en el paràmetre 
    // operacio


    public function index()
    {
        // Recuperem la llista de tots els users
        $res = $this->users->getAll();
        include_once 'vistes/templates/header.php';
        include_once 'index.php';
        include_once 'vistes/templates/footer.php';
    }


    // Per afegir un usuari 2 passos: 
    // - Mostrar el formulari d'alta
    // - Desar les dades del formulari en la BD


    // Mètode per mostrar el formulari per donar d'alta un nou usuari
    public function showformnew()
    {

        include_once 'vistes/templates/registerHeader.php';
        include_once 'vistes/usuarios/formnew.php';
        include_once 'vistes/templates/footer.php';
    }

    // mètode per controlar l'emmagatzemar un usuari a la BD
    public function store()
    {

        // Recuperem els camps del formulari
        $nom = obtenir_camp('nom');
        $cognoms = obtenir_camp('cognoms');
        $email = obtenir_camp('email');
        $username = obtenir_camp('username');
        $password = obtenir_camp('password');



        if ($nom == "" || $cognoms == ""
            || $email == "" || $username == ""|| $password == "") {

            $_SESSION['nom'] = $nom;
            $_SESSION['cognoms'] = $cognoms;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['missatge'] = "Camps obligatoris!!";

            header('Location: index.php?control=ControlUsers&operacio=showformnew');
            exit;

        }

        // Al model li diem que afegeix un nou usuari        
        $res = $this->users->add($nom, $cognoms, $email, $username, $password);
        $res = true;
        if ($res) {
            // $_SESSION['missatge'] = "alta correcta. Opció deshabilitada";
        } else {
            $_SESSION['missatge'] = "Alta incorrecta";
        }

        header("Location: index.php?control=ControlUsers");
    }

    // Per actualitzar un users 2 passos: 
    // - Mostrar el formulari d'actualització amb les dades actuals del users
    // - Desar les dades del formulari en la BD


    // Mètode per mostrar el formulari d'actualització d'un usuari
    public function showformupdate()
    {
        // Via GET ens passaran el codi de l'heroi que volem modificar
        // Comprovem l'existència del paràmetre
        if (!isset($_GET['codi'])) {
            $_SESSION['missatge'] = "Has de triar un usuari!";
            header("Location: index.php?control=ControlUsers");
            exit;
        }

        // Recuperem de la BD el usuari que volem modificar 
        $codi = $_GET['codi'];
        $actual = $this->users->get($codi);

        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!
        if(!$actual){
            $_SESSION['missatge'] = "Aquest usuari no existeix!";
            header("Location: index.php?control=ControlUsers");
            exit;
        }

        // Quan es carregui el formulari per primer cop
        // volem que es mostrin les dades actuals del usuari.
        //      En cas que ja existeixin, voldrà dir que s'ha recarregat aquest formulari
        //      d'actualització perque les dades dels controls del formulari no són correctes

        $_SESSION['nom'] = $actual['nom'];
        $_SESSION['cognoms'] = $actual['cognoms'];
        $_SESSION['email'] = $actual['email'];
        $_SESSION['username'] = $actual['username'];
        $_SESSION['password'] = $actual['password'];
        $_SESSION['missatge'] = "Usuari recuperat!!";

        // Mostrem el formulari..
        include_once 'vistes/templates/header.php';
        include_once 'vistes/usuarios/formupdate.php';
        include_once 'vistes/templates/footer.php';
    }

    public function update()
    {
        // Via GET ens passaran el codi de l'heroi que volem modificar
        // Comprovem l'existència del paràmetre
        if (!isset($_GET['codi'])) {
            $_SESSION['missatge'] = "Has de triar un usuari!";
            header("Location: index.php?control=ControlUsers");
            exit;
        }

        // Recuperem de la BD el usuari que volem modificar 
        $codi = $_GET['codi'];
        $actual = $this->users->get($codi);

        // Si el id de l'usuari no és correcte i no s'ha pogut recuperar
        // no continuem!
        if(!$actual){
            $_SESSION['missatge'] = "Aquest usuari no existeix!";
            header("Location: index.php?control=ControlUsers");
            exit;
        }

        // Recuperem els camps del formulari
        $nom = obtenir_camp('nom');
        $cognoms = obtenir_camp('cognoms');
        $email = obtenir_camp('email');
        $username = obtenir_camp('username');

        // Comprovem les restriccions associades a cada camp  
        if ($nom == "" || $cognoms == ""
            || $email == "" || $username == "") {

            $_SESSION['nom'] = $nom;
            $_SESSION['cognoms'] = $cognoms;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            $_SESSION['missatge'] = "Camps obligatoris!!";

            header('Location: index.php?control=ControlUsers&operacio=showformupdate');
            exit;
        }

        // Modifiquem les dades del usuari guardant possibles canvis en la BD
         $res = $this->users->update($codi, $nom, $cognoms, $email, $username);

         header('Location: index.php?control=ControlUsers');

    }


    // Mètode per esborrar un usuari
    public function delete()
    {
        // Via GET ens passaran el codi de l'heroi que volem esborrar
        // Comprovem l'existència del paràmetre
        if (!isset($_GET['codi'])) {
            $_SESSION['missatge'] = "Has de triar un usuari!";
            header("Location: index.php?control=ControlUsers");
            exit;
        }
        // Recuperem de la BD el usuari que volem modificar 
        $codi = $_GET['codi'];
        $actual = $this->users->get($codi);
        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!
        if (!$actual) {
            $_SESSION['missatge'] = "Aquest usuari no existeix!";
            header("Location: index.php?control=ControlUsers");
            exit;
        }
        // eborrem el usuaris de la BD
        $res = $this->users->delete($codi);
        $res = true;
        if ($res)
            $_SESSION['missatge'] = "Usuari eliminat.";
        else
            $_SESSION['missatge'] = "Usuari no s'ha pogut esborrar!";

        header("Location: index.php?control=ControlUsers");
    }


}

?>