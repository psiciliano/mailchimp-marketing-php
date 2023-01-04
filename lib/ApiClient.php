<?php

namespace MailchimpMarketing;

use MailchimpMarketing\Configuration;

class ApiClient extends Configuration {

  public function __set($name,$value) {
      
    if(property_exists($this,$name))
    {
      $this->$name=$value;
    }
  }
  
  public function __get($name) {
      
    if(property_exists($this,$name))
    {
      return $this->$name;
    }
    return null;
  }

}
