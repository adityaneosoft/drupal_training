<?php

namespace Drupal\drupal_train\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the drupal_train module.
 */
class DefaultControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "drupal_train DefaultController's controller functionality",
      'description' => 'Test Unit for module drupal_train and controller DefaultController.',
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
   * Tests drupal_train functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module drupal_train.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
