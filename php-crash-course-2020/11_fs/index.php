<?php
// Magic constants
echo __DIR__;
echo __FILE__;
echo __LINE__;
echo'<br>';
// Create directory

// Rename directory

// Delete directory

// Read files and folders inside directory
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
echo file_put_contents('sample.txt',"Some Content");

// file_get_contents from URL

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file