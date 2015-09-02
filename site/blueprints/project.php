<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Date
    type:  date
  link:
    label: External link
    type:  text
  tags:
    label: Tags
    type:  tags
  sitename:
    label:  Hosted On
    type:   text