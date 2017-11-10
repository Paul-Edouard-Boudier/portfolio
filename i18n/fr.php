<?php
  $locale = $_GET['locale'];

  $filetrad = 'i18n/'. $locale .'.php';
  require_once $filetrad;


  $i18n = [
    'templates' => [
      'head' => [
        'work' => "Mon travail",
        'skill' => "Compétences",
        'contact' => "Contact",
      ]
    ],
  ];
