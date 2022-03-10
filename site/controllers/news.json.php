<?php

return function ($page) {

  $limit      = 2;
  $news   = $page->children()->listed()->paginate($limit);
  $pagination = $news->pagination();
  $more       = $pagination->hasNextPage();

  return [
      'news' => $news,
      'more'     => $more,
      'html'     => '',
      'json'     => [],
    ];
};