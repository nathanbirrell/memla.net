<?php if(!defined('KIRBY')) exit ?>

title: NEW PROJECT
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  tags:
    label: Tags (use a dash "-" as a space, it will be displayed as a space)
    type: text
  text: 
    label: Description (Will be cut off after 2 lines of text. Remember to consider different width devices.)
    type:  textarea
    size:  medium