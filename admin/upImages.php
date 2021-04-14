
    <p>Upload Images</p>
    <p>Upload images will copy to the server, you can also copy and paste images in the Post Content section</p>
    <p class="lead">Uploading images here will allow you to reuse the images, for example, a seasonal promotion. After uploading an image here, you can select it in the post content section.</p>
    <!-- UPLOAD FILE TYPES .gif, .jpeg, and .png -->

    <p><a name='images'>Upload file script</a></p>
        <div class="form-group">
            <form method='POST' enctype='multipart/form-data' name='frmmain' action='<?php htmlspecialchars($PHP_SELF); ?>'>
            Browse for Image (jpg): <input type="file" name="image_file" size="35">
            <br/>
            <input type="submit" value="  Upload File  " name="action">
            </form>
        </div>
        <!-- END UPLOAD FILE TYPES .gif, .jpeg, and .png -->
   