<?php

function displayTag($tag) {
  return ucwords(str_replace('-', ' ', $tag));
}