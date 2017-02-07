<?php 
    function removeDir($path) {
        $dir = new DirectoryIterator($path);
        foreach ($dir as $fileinfo) {
            if ($fileinfo->isFile() || $fileinfo->isLink()) {
                unlink($fileinfo->getPathName());
            } elseif (!$fileinfo->isDot() && $fileinfo->isDir()) {
                removeDir($fileinfo->getPathName());
            }
        }
        rmdir($path);
    }
     if (isset($_GET['path'])) {
         removeDir($_GET['path']);
         header("Location: admin.php");
     }
?>
