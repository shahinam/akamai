<?php

/**
 * @file
 * Contains \Drupal\akamai\Tests\AkamaiCacheClearTest.
 */

namespace Drupal\akamai\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Test various Akamai cache clearings with paths and aliases.
 *
 * @group akamai
 */
class AkamaiCacheClearTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('akamai', 'node', 'block');

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests clear.
   */
  public function testDirectClear() {

  }

}
