<?php

/**
 * @file
 * Contains \Drupal\akamai\ContentControl.
 */

namespace Drupal\akamai;

/**
 * Interface for an implementation of the Akamai cache control service.
 */
interface ContentControlInterface {

  /**
   * Purges a URL or list of URLs from the edge cache.
   *
   * @param string $url
   *   A single URL.
   */
  public function clearUrl($url);

}
