<?php

namespace Drupal\di_demo\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the di_demo module.
 */
class DemoControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "di_demo DemoController's controller functionality",
      'description' => 'Test Unit for module di_demo and controller DemoController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests di_demo functionality.
   */
  public function testDemoController() {
    // Check that the basic functions of module di_demo.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
