# Handling file upload with PHP

There is a simple page to upload a file, like an image or video.

The PHP script included `upload.php`, takes the uploaded file, checks if the file already exists and then saves it in the uploads folder.

Make sure you set proper limits for `upload_max_filesize` and `post_max_size` in your `php.ini` file.  

Special thanks to [this](http://www.phpforkids.com/php/php-forms-file-uploads.php) website to teach me about this code.
