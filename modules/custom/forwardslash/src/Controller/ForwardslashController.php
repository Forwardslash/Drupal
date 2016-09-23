<?php

namespace Drupal\forwardslash\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ForwardslashController.
 *
 * @package Drupal\forwardslash\Controller
 */
class ForwardslashController extends ControllerBase {

  /**
   * Helloworld.
   *
   * @return string
   *   Return Hello string.
   */
  public function helloWorld() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: helloWorld')
    ];
  }

}
