<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: true
files: true
fields:
  title: 
    label: Page title
    type:  text
  people_title: 
    label: People heading
    type:  text
  find_title: 
    label: Find Us title
    type: text
  find_address: 
    label: Address
    type:  textarea
    size:  small
  find_image:
    label: Find us image (to change - upload any image and make sure this is linking to it's location)
    type: text
  find_map_link:
    label: Google map link (paste any link here to a map of Memla)
    type: text