<?php

namespace Drupal\drupal_train\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Hello_world.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello_world() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello_world')
    ];
  }


  /**
   * show_user.
   *
   * @return string[]
   *   Return Hello string.
   */
  public function show_user(AccountInterface $user, Request $request) {

    $build = [
      '#markup' => $user->getDisplayName()
    ];

    return  $build;
  }

  /**
   * show_issue.
   *
   * @return string[]
   *   Return Hello string.
   */
  public function show_issue($type) {

    $build = [
      '#markup' => 'issue type is'.$type
    ];

    return  $build;
  }

}
