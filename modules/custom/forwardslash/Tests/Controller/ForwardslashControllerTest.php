<?php

namespace Drupal\forwardslash\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the forwardslash module.
 */
class ForwardslashControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "forwardslash ForwardslashController's controller functionality",
      'description' => 'Test Unit for module forwardslash and controller ForwardslashController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests forwardslash functionality.
   */
  public function testForwardslashController() {
    // Check that the basic functions of module forwardslash.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
