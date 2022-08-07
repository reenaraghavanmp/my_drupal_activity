<?php

namespace Drupal\di_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class DemoController.
 */
class DemoController extends ControllerBase {
  protected $demoService;

  /**
   * Class constructor.
   */
  public function __construct($demoService) {
    $this->demoService = $demoService;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('di_demo.demo_service')
    );
  }

  /**
   * Generates an example page.
   */
  public function demo() {
    return array(
      '#markup' => t('Hello @value!', array('@value' => $this->demoService->getDemoValue())),
    );
  }

  // /**
  //  * Hello.
  //  *
  //  * @return string
  //  *   Return Hello string.
  //  */
  // public function hello($name) {
  //   return [
  //     '#type' => 'markup',
  //     '#markup' => $this->t('Implement method: hello with parameter(s): $name'.$name),
  //   ];
  // }

}
