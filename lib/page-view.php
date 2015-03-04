<div class="wrap genesis-metaboxes">
		<form method="post" action="options.php">
        <?php settings_fields('genesis-upload-logo-setting'); ?>
        <?php upload_logo_settings('genesis-upload-logo-setting'); ?>
        <?php 
		$uploadgensislogo = get_option('uploadgenesislogo');
		$floatgenesislogo = get_option('floatgenesislogo');
		$centergenesislogo = get_option('centergenesislogo');
		$widthgenesislogo = get_option('widthgenesislogo');
		$heightgenesislogo = get_option('heightgenesislogo');
		  ?>
        <div id="icon-options-general" class="icon32"><br></div>			
        <h2>Theme Settings</h2>
		<p class="top-buttons">
		<input name="submit" id="" class="button button-primary" value="Save Settings" type="submit">
        </p>
        <?php if (isset($_GET["settings-updated"]) AND $_GET["settings-updated"] == "true") 
 { ?>
<div id="message" class="updated"><p><strong>Settings saved.</strong></p></div>
<?php } ?>
			<div class="metabox-holder">
			<div class="postbox-container">
			<input name="genesis-settings[theme_version]" value="2.0.1" type="hidden"><input name="genesis-settings[db_version]" value="2007" type="hidden">
            <div id="main-sortables" class="meta-box-sortables ui-sortable">
            <div id="genesis-theme-settings-version" class="postbox ">
            <div class="handlediv" title="Click to toggle"><br></div>
            <h3 class="hndle"><span>Upload Logo</span></h3>
            <div class="inside">
            <p><span class="description"></span></p>
            <p>
  <div class="rm_input rm_text">
<label for="genesis-settings[uploadlogo]">Upload Logo:</label>

<input name="uploadgenesislogo" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_option('uploadgenesislogo'); ?>" />
<a href="#" class="upload-button button">Choose image</a>
<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<script>
var uploadID = '';
jQuery('.upload-button').click(function() {
uploadID = jQuery(this).prev('input');
tb_show('', 'media-upload.php?type=image&TB_iframe=true');
return false;
});
 
window.send_to_editor = function(html) {
imgurl = jQuery('img',html).attr('src');
uploadID.val(imgurl);
tb_remove();
}
</script>
</p>
<p>
			<label for="genesis-settings[floatlogo]">Float Logo:</label>
			<select name="floatgenesislogo" id="floatgenesislogo">
			<option value="left" <?php if ($floatgenesislogo == 'left') echo 'selected="selected"'; ?>>Left</option>
            <option value="right" <?php if ($floatgenesislogo == 'right') echo 'selected="selected"'; ?>>Right</option>
            <option value="none" <?php if ($floatgenesislogo == 'none') echo 'selected="selected"'; ?>>none</option>
			</select>
</p>
<p>
				<label for="genesis-settings[widthgenesislogo]">Logo Width				<input name="widthgenesislogo" id="genesis-settings[widthgenesislogo]" value="<?php echo get_option('widthgenesislogo'); ?>" size="3" type="text">
				px</label>
			</p>
            <p>
				<label for="genesis-settings[heightgenesislogo]">Logo Height				<input name="heightgenesislogo" id="genesis-settings[heightgenesislogo]" value="<?php echo get_option('heightgenesislogo'); ?>" size="3" type="text">
				px</label>
			</p>
<p>
			<label for="genesis-settings[centergenesislogo]"><input name="centergenesislogo" id="genesis-settings[centergenesislogo]" value="1" <?php if ( '1' == $centergenesislogo ) echo 'checked="checked"'; ?> type="checkbox">
			Center Logo(for enable this option change float to none and add width value)</label>
</p>


           </div> 
            </div>
            </div>
            </div>
            </div>			
        
          
            <br/>
             <br/>
            <div class="bottom-buttons">
			<input name="submit" id="" class="button button-primary" value="Save Settings" type="submit">
            </div>
		</form>
</div>