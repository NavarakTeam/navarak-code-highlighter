<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Navarak_Code_Highlighter
 * @subpackage Navarak_Code_Highlighter/public/partials
 */
?>

<div class="example-container">
	<div class="d-flex justify-content-between example-top">
		<strong id="detect-language">
			<?php _e( 'Example', 'navarak-code-highlighter' ) ?>
		</strong>
		<button id="code-copy-<?php echo $identifier ?>" onclick="addToClipboard(<?php echo $identifier ?>);" class="btn copy-btn" data-clipboard-snippet>
			<i class="fa fa-copy"></i> <?php _e( 'Copy', 'navarak-code-highlighter' ) ?>
		</button>
	</div> 
	<div id="code-<?php echo $identifier ?>">
		<?php echo $block_content ?>
	</div> 
</div>