<style>
	.popup-form input[type="text"], .popup-form textarea{
		min-width: 700px;
	}
</style>
<form method="POST">
    <table class="form-table popup-form">
        <tbody>
            <tr>
                <th scope="row">
                        <label for="awesome_text">Image URL</label>
                </th>
                <td>
                        <input type="text" name="image_url" id="image_url" value="<?php echo !empty($image_url) ? stripslashes($image_url) : ''; ?>">
                <?php
                    if(!empty($popup_enable) && $popup_enable=='image'){ 
                        ?><input type="radio" name="popup_enable" value="image" checked="checked"/><?php 
                    }
                    else{
                        ?><input type="radio" name="popup_enable" value="image"/> <?php 
                    }
                    ?>Enable
                </td>
            </tr>

            <tr>
                <th scope="row"><label for="awesome_text">Embeded Video (Youtube)</label></th>
                <td>
                        <textarea name="embeded_video" id="embeded_video"><?php echo !empty($embeded_video) ? stripslashes($embeded_video) : ''; ?></textarea>
                
                    <?php
                    if(!empty($popup_enable) && $popup_enable=='video'){ 
                        ?><input type="radio" name="popup_enable" value="video" checked="checked"/> <?php 
                    }
                    else{
                        ?><input type="radio" name="popup_enable" value="video"/> <?php 
                    }
                    ?>Enable
                </td>
            </tr>

            <tr>
                <th scope="row">&nbsp;</th>
                <td>
                        <input type="submit" value="Save Settings" class="button button-primary button-large">
                </td>
            </tr>



        </tbody>
    </table>
</form>



