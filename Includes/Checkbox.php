<?php

    class Checkbox{
        private $name;
        function __construct($name)
            {
            $this->name=$name;
            }
        public function generate(){
            echo '<p>' . ucfirst(str_replace('_', ' ', $this->name)) . '</p><input type="checkbox"  name="' . $this->name . '" />';
        }    
    }

?>