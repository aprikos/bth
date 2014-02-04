<?php
/**
 * Theme related functions. 
 *
 */
 
/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function get_title($title) {
  global $Radix;
  return $title . (isset($Radix['title_append']) ? $Radix['title_append'] : null);
}


class CNavigation {
  public static function GenerateMenu($items, $class) {

    $html = "<nav class='$class'>\n";
    foreach($items as $key => $item) {
      if(basename($_SERVER['SCRIPT_FILENAME']) == $item['url']) {
		$selected = "selected";
} else {
	$selected = "";
}
      $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};