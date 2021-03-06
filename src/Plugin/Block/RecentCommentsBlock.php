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
      '#markup' => '<div id="recent-comments-react"></div>',
      '#attached' => [
        'library' => [
          'drupal_block_reactive/reactjs',
          'drupal_block_reactive/component',
        ],
      ],
    ];
  }

}
