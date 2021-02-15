<?php

    class Textarea{
        private $name;
        function __construct($name)
            {
            $this->name=$name;
            }
        public function generate(){
            echo '<p>' . ucfirst($this->name) . '</p><input type="textarea"  name="' . $this->name . '" />';
        }
    }

?>