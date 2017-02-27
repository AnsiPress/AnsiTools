<?php
function removeDirectory($path) {
        $files = glob($path . '/*');
        foreach ($files as $file) {
                is_dir($file) ? removeDirectory($file) : unlink($file);
        }
        //rmdir($path);
        return;
}
removeDirectory("/run/nginx-cache/");
?>
