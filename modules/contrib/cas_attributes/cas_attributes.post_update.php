<?php

/**
 * @file
 * Post update functions for CAS Attributes module.
 */

/**
 * Don't serialize the mappings.
 */
function cas_attributes_post_update_unserialize_mappings() {
  $config = \Drupal::configFactory()->getEditable('cas_attributes.settings');
  $config
    ->set('field.mappings', array_filter(unserialize($config->get('field.mappings'))))
    ->set('role.mappings', (array) unserialize($config->get('role.mappings')))
    ->save(TRUE);
}
