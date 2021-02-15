<?php
    class InputField{
        private $name;

        public function __construct($name)
            {
            $this->name=$name;
            }
        public function generate(){
            echo '<p>' . ucfirst($this->name) . '</p> <input type="text"  name="' . $this->name . '" />';
        }
    }   
    
?>