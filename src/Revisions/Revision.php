<?php
namespace src\Revisions;

/**
 * Une class est généralement dans un fichier qui porte le même nom et commence toujours par une majuscule.
 * 
 * Une class est une représentation des objets que l'on va créer. On appelle ça l'instanciation.
 * 
 * Une class possède des propriétés (variables) et des méthodes (fonctions)
 */
class Revision {

    // Une constante est un élément qui stocke une information que ne change pas
    // Une constante a une visibilité (public par défaut)
    const CLASSNAME = "Revision";

    // Une propriété ou une méthode static est un élément qui appartient à la class et non à l'objet instancié.
    // Mettre un élément en static revient à dire qu'on a besoin de l'utiliser une fois "rapidement" sans charger la class 
    // et toutes les infos qu'il y a dedans
    public static $propStatic = "Propriété statique";

    /**
     * La class contient des propriétés qui peuvent avoir une valeur par défaut ou non.
     * Ces propriétés ont une visibilité public, private ou protected
     * 
     * Public: La propriété ou la méthode est accessible partout dans le projet
     * Private: La propriété ou la méthode est accessible uniquement dans la class où elle est déclarée
     * Protected: La propriété ou la méthode est accessible dans la class où elle est déclarée et dans les class enfants
     * 
     * Pour un code plus clair, on va typer nos propriétés et nos méthodes
     *
     * @var string
     */
    public string $prop1 = "Hello world!";

    public int $prop3;

    private string $prop2 = "Je suis une propriété privée";

    private $nom;

    private $prenom;

    protected string $protectedProp = "Je suis une propriété protégée";

    /**
     * Le constructeur est une méthode magique appelée à l'instanciation d'une class.
     * Il permet d'exécuter du code en amont ou de charger les propriétés avec des paramètres passées à la class.
     *
     * @param string $prenom
     * @param string $nom
     */
    public function __construct(string $prenom, string $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    /**
     * On peut créer les propriétés directement dans le constructeur depuis php 8.0
     *
     * @param string $prenom
     * @param string $nom
     * @param string $prop1
     */
    // public function __construct(private string $prenom, private string $nom, public $prop1 = "Hello world")
    // {
        
    // }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function sayHello ():string
    {
        return "Hello";
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return string
     */
    public function helloYou (string $name):string
    {
        return "Hello $name";
    }

    public function useProp2 ()
    {
        // Exécute du code avec prop2
    }

    /**
     * Cette méthode est un getter ou un accesseur elle permet d'autoriser la récupération de la valeur d'une propriété privée
     *
     * @return void
     */
    public function getProp2()
    {
        // Retourne la valeur de la propriété prop2 de la class
        // $this-> fait référence à l'objet instancié à partir de cette class
        return $this->prop2;
    }

    /**
     * Cette méthode est un setter ou mutateur qui va permettre d'attribuer une valeur à la propriété privée
     *
     * @param [type] $prop2
     * @return void
     */
    public function setProp2($prop2)
    {
        $this->prop2 = $prop2;
    }

    public function getConst ()
    {
        return self::CLASSNAME;
    }

}