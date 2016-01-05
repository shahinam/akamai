<?php

/**
 * @file
 * Contains \Drupal\akamai\Plugin\Block\CacheClearBlock.
 */

namespace Drupal\akamai\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Provides a block to clear the currently viewed URL.
 *
 * @Block(
 *   id = "akamai_cache_clear_block",
 *   admin_label = @Translation("Akamai Cache Clear"),
 *   category = @Translation("Akamai")
 * )
 */
class CacheClearBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('\Drupal\akamai\Form\ClearUrlForm');
    return array(
      'cache_clear_form' => $form,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'purge akamai cache');
  }

}
