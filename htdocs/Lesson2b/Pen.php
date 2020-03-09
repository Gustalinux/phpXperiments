<?php

class Pen {
    var $model;
    var $color;
    var $tip;
    var $charge;
    var $capped;
    
    function scribble(){

        $this->inColor = 'color: ' . $this->color; //This variable was included, because it was giving problems
        //when defining the color, because of the single quotes and double quotes.
        if($this->capped == true){
            echo "<p>ERROR! The pen ".$this->model." ".$this->color." is capped!</p>";
        }
        else{
            echo "<p style=\"{$this->inColor}\">I'm scribbling with the pen ".$this->model." ".$this->color." ...</p>";
            //Instead of concatenating the pure color variable, I concatenated the inColor variable that already has the style attribute.
        }
    }
    function cap(){
        
        if($this->capped == true){
            echo "<p>ERROR! The pen ".$this->model." ".$this->color." is already capped!</p>";
        }
        else{
            $this->capped = true;
            echo "<p>The pen ".$this->model." ".$this->color." is capped!</p>";
        }
    }
    function uncap(){
        
        if($this->capped == false){
            echo "<p>ERROR! The pen ".$this->model." ".$this->color." is already uncapped!</p>";
        }
        else{
            $this->capped = false;
            echo "<p>The pen ".$this->model." ".$this->color." is uncapped!</p>";
        }
    }
}
