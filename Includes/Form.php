<?php
class Form{
    private $method;
    private $action;
    private $inputFields=array();
    function __construct($method, $action)
    {
        $this->method=$method;
        $this->action=$action;
    }
    function addField(Object $name){
        array_push($this->inputFields, $name);
    }
    function showFields($inputFields){
        foreach($inputFields as $input){
            $input->generate(); echo "<br/>";
        }
    }
    function display(){
        echo "
        <div style='position: absolute; left:50%; top:50%; transform: translate(-50%,-50%); 
        padding:1rem; 
        border-radius:5px;
        -moz-box-shadow:    3px 3px 5px 6px #ccc;
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;
        box-shadow:         3px 3px 5px 6px #ccc;'>
        <h1>Formular</h1>
        <form method={$this->method} action={$this->action}>";
        $this->showFields($this->inputFields);
        echo "<input type='submit' value='Trimite' /> </form></div>";
    }
}
?>