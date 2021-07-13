<?php
/**
 * @file
 * theme customization for chahmirian.
 */

 function chahmirian_form_system_theme_settings_alter(&$form, &$form_state){

/**
 * TABS FOR THEME CONFIGURATION.
 */

$form['chahmirian'] = [
  '#type'       => 'vertical_tabs',
  '#title'      => '<h3>' . t('Chahmirian Theme Settings') . '</h3>',
  '#default_tab' => 'general',
];

// Main Tabs -> General.
$form['general'] = [
    '#type'  => 'details',
    '#title' => t('General'),
    '#description' => t('<h3>Thanks for selecting chahmirian theme for your platform</h3>CHAHMIRIAN is a free Drupal 8 & 9 theme designed and developed by ARSHADSAHJAVI'),
    '#group' => 'chahmirian',
];

    // General -> info.
$form['general']['theme_version'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Current Theme Version'),
    '#description' => t('9.0.0'),
];
$form['general']['general_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Info'),
    '#description' => t('Chahmirian is a free Drupal 9 theme. Its simple and elegant using modren technology Sass based. Easy to use for business, service providers and all kinds of drupal sites.'),
];


  // Main Tabs -> Color.
$form['color'] = [
    '#type'  => 'details',
    '#title' => t('Theme Color'),
    '#group' => 'chahmirian',
];


  

  // Main Tabs -> Homepage Slider.
//   $form['slider'] = [
//     '#type'  => 'details',
//     '#title' => t('Homepage Slider'),
//     '#description' => t('Manage homepage slider.'),
//     '#group' => 'chahmirian',
//   ];

  // Main Tabs -> Header.
//   $form['header'] = [
//     '#type'  => 'details',
//     '#title' => t('Header'),
//     '#group' => 'chahmirian',
//   ];

  // Main Tabs -> Sidebar.
//   $form['sidebar'] = [
//     '#type'  => 'details',
//     '#title' => t('Sidebar'),
//     '#group' => 'chahmirian',
//   ];

  // Main Tabs -> Content.
//   $form['content'] = [
//     '#type'  => 'details',
//     '#title' => t('Content'),
//     '#group' => 'chahmirian',
//   ];

  // Main Tabs -> Footer.
//   $form['footer'] = [
//     '#type'  => 'details',
//     '#title' => t('Footer'),
//     '#group' => 'chahmirian',
//   ];

// Main Tabs -> Social.
$form['social'] = [
    '#type'  => 'details',
    '#title' => t('Social'),
    '#description' => t('Social icons settings. These icons appear in footer region.'),
    '#group' => 'chahmirian',
];
 
  // Main Tabs -> Upgrade to Premium theme tab.
//   $form['upgrade'] = [
//     '#type'  => 'details',
//     '#title' => t('Upgrade To Premium'),
//     '#description'  => t('<h3>Upgrade To Primium For $10 only.</h3>'),
//     '#group' => 'chahmirian',
//   ];


}