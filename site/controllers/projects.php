<?php

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $projects = $page->children();

  // add the tag filter
  $tag = param('tag');
  if($tag) {
    $projects = $projects->filterBy('tags', $tag, ',');
  }

  // fetch all tags
  $tags = $projects->pluck('tags', ',', true);

  // apply pagination
  // $projects   = $projects->paginate(10);
  // $pagination = $projects->pagination();

  return compact('projects', 'tags', 'tag', 'pagination');

};

function displayTag($tag) {
  return ucfirst(str_replace('-', ' ', $tag));
}

function getTagThumbnail($tag, $page) {
  return $page->children()->filterBy('tags', $tag, ',')->first()->images()->first()->url();
}