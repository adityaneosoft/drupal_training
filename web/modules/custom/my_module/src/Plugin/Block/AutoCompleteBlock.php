<?php

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'AutoComplete' Block.
 *
 * @Block(
 *   id = "auto_complete_block",
 *   admin_label = @Translation("AutoComplete block"),
 *   category = @Translation("AutoComplete World"),
 * )
*/
class AutoCompleteBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $article = \Drupal::config('my_module.config')->get('article');
  
    return [
      '#markup' => $this->t("Node").''.json_encode($article),
    ];
  }

}
