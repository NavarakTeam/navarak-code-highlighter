<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Navarak_Code_Highlighter
 * @subpackage Navarak_Code_Highlighter/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<select name="navarak_code_highlighter_current_style" id="navarak_code_highlighter_current_style">
<?php
foreach ($scanned_directory as $key => $directory) {
	$selected = ( $option == $directory ) ? 'selected="selected"' : '';
	echo "\n\t<option value='$directory' $selected> $directory</option>";
}
?>
</select>