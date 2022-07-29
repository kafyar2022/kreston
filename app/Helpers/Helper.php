<?php

/**
 * Custom helper class
 * @author Ikrom Rahimov fleck97rgb@gmail.com
 */

namespace App\Helpers;

use App\Models\Content;
use App\Models\Text;

class Helper
{
  public static function getContents($locale, $pageName)
  {
    $response = [];
    $contents = Content::where('locale', $locale)
      ->where('page', $pageName)
      ->orWhere('page', null)
      ->get();

    foreach ($contents as $content) {
      $response[$content->slug] = $content->content;
    }

    $texts = Text::where('locale', $locale)
      ->where('page', $pageName)
      ->orWhere('page', null)
      ->get();

    foreach ($texts as $text) {
      $response[$text->slug] = $text->text;
    }

    return $response;
  }
}
