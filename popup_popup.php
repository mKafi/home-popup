<?php 
if(!empty($popup_enable) && $popup_enable == 'image'){
    ?>
    <div class="popup-cont-bg"></div>
    
    <div class="popup_img_cont popcont">
        <?php 
        if(!empty($image_url)){
            list($width, $height) = getimagesize($image_url);
            $img_class = 'vertical';
            if($width >= $height){
                $img_class = 'horizontal';
            }
            ?><img class="<?php echo $img_class; ?>" src="<?php echo stripslashes($image_url); ?>" alt=""/><?php 
        }
        ?>
    </div>
    <?php 
}

if(!empty($popup_enable) && $popup_enable == 'video'){
    ?> 
    <div class="popup-cont-bg"></div>
    <div class="popup_vidu_cont popcont">
        <?php         
        if(!empty($embeded_video)){
            $url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $embeded_video, $matches);
            $id = $matches[1];
            $width = '800px';
            $height = '450px';
            ?>
            <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe> 
            <?php 
        }
        ?>
    </div>
    <?php 
}
?>

