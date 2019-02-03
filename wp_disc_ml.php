//Add the following to your theme functions php.

add_filter('the_content','add_post_disclaimer');
function add_post_disclaimer($disclaimer) {
		function disc_lang() {
			$site = get_current_blog_id();
			if ($site == 1) {
					$disc = $disc_en = '<p><font size="2">Language Site 1</font></p>';
			  } elseif ($site == 2) {
					$disc = $disc_pt = '<p><font size="2">Language Site 2</font></p>';
				} elseif ($site == 11) {
					$disc = $disc_pt = '<p><font size="2">Language Site 11</font></p>';
				}
			return $disc;
	  }

		if(is_single() && !is_home()) {
				$disclaimer .= disc_lang($disc);
		}
		return $disclaimer;
}
