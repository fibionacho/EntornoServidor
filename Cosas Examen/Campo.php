
<?php

 class Campo 
{
    private string $type;
    private $label;
    private $name;
    private $id;
    /*CONSTRUCTOR */

    public function __construct(string $type="", $label="", $name="",$id="")
    {
        $this->type=$type;
        $this->label=$label;
        $this->name=$name;
        $this->id=$id;
    }
    /*SETTER Y GETTER */
    public function getType():string{
        return $this->type;
    }
    public function setType($type){
        $this->type=$type;
    }
    
    public function getLabel():string{
        return $this->label;
    }
    public function setLabel($label){
        $this->label=$label;
    }

    public function getName():string{
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }

    
    public function getId():string{
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

     /*MANTENER LA INFORMACION EN EL CAMPO*/
     protected function mantenerCampo(array $peticion) : string {

        return isset($peticion[$this->getName()]) ? $peticion[$this->getName()] : "";
    }

   

public function contenidoCampos() : string {
    return "
        <label class='form-label'>". $this->getLabel() ."</label>
        <input class='form-control' type='" . $this->getType(). "' id='" . $this->getid() . "' name='". $this->getName() ."' value='".$this->mantenerCampo($_POST)."' required>
        
    ";
}
}


?>