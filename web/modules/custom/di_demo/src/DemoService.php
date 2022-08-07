<?php

namespace Drupal\di_demo;

/**
 * Class DemoService.
 */
class DemoService {
  protected $demo_value;

  /**
   * Constructs a new DemoService object.
   */ 
  
  public function __construct() {
    $this->demo_value = 'World--- Hello World----';
  }
  
  public function getDemoValue() {
    return $this->demo_value;
  }

}
