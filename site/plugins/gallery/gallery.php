<?php
kirbytext::$tags['gallery'] = array(
  'html' => function($tag) {
    $html = '<figure class="entry-gallery collage">';

    if ($tag->attr('gallery')=='all') :
      $images = $tag->page()->images()->sortBy('sort','asc');
      $images = array_map("replace_imgobj_with_imgname", $images);
    elseif ($tag->attr('gallery')=='all-nofirst') :
      $images = $tag->page()->images()->sortBy('sort','asc')->offset(1);
      $images = array_map("replace_imgobj_with_imgname", $images);
    else:
      $images = explode('|', $tag->attr('gallery'));
    endif;

    foreach ($images as $image) :
      if ($file = $tag->file($image)) :
        $thumb = thumb($file, array('width' => 825));
        $html .= '<img src="'.$thumb->url().'" width="'.$thumb->width().'" height="'.$thumb->height().'" data-width="'.$thumb->width().'" data-height="'.$thumb->height().'" alt="'.$file->caption().'">';
      endif;
    endforeach;

    $html .= '</figure>';

    return $html;
  }
);

function replace_imgobj_with_imgname($image) {
  return $image->filename();
}
