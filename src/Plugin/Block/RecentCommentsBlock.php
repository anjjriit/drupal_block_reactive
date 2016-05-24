<?php

namespace Drupal\drupal_block_reactive\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Recent comments (reactive)' block.
 *
 * @Block(
 *   id = "recent_comments_reactive",
 *   admin_label = @Translation("Recent comments (reactive)"),
 *   category = "Development"
 * )
 */
class RecentCommentsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => 'perhaps fallback',
      '#attached' => [
        'library' => [
          'drupal_block_reactive/recent-comments-reactive',
        ],
      ],
    ];
  }

}