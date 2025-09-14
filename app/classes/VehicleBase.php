<?php

abstract class VehicleBase {
    
protected  $name ;
protected  $type ;
protected  $price ;
protected  $image ;
 
public function _construct($name, $type, $price, $image){

    $this->name =$name;
    $this->type =$type;
    $this->price =$price;
    $this->image =$image;
}

abstract public function getDetails();

public function anotherMethod(){

    return "Hello";
}




}