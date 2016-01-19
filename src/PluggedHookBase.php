<?php

/**
 * @file
 * Contains Drupal\plugable_hooks\Plugin\PluggedHookBase.
 */

namespace Drupal\plugable_hooks;

use Drupal\Component\Plugin\PluginBase;

/**
 * Base class for Plugged hook plugins.
 */
abstract class PluggedHookBase extends PluginBase implements PluggedHookInterface {

  abstract function invoke($args);

}
