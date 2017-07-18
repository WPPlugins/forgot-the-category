<?php
/*
Plugin Name: Forgot the Category
Plugin URI: http://dancoulter.com/projects/forgot-the-category/
Description: Hate forgetting to select a category when you write a new post? I know I do.  This plugin won't let you.
Author: Dan Coulter
Version: 0.3
Author URI: http://dancoulter.com/
*/ 

/*
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

class DC_ForgotTheCategory {
    function AddToEditPage() {
		?>
			<script type="text/javascript"><!--
				jQuery("form#post").submit(function(){
					if ( jQuery("ul#categorychecklist input:checkbox:checked").length < 1 ) {
						alert("Oops! You forgot to select a category.");
						jQuery("#publish").removeClass("button-primary-disabled");
						jQuery("#ajax-loading").css("visibility", "hidden");
						return false;
					} else {
						return true;
					}
				});
			//--></script>
		<?php
    }
}

add_action("edit_form_advanced", array("DC_ForgotTheCategory", "AddToEditPage"));
?>
