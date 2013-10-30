Automatic name cleaning for CodeignIgniter File Upload
==================

CodeIgniter extension to clean filename when uploading (but keeping has much as possible, unlike `encrypt_name` option).

Simple extention to `CI_Upload` that automatically passes the uploaded file's filename throught
`convert_accented_caracters` and `url_title` in order to eliminate non-url caracters.

Enabled by default, can be disabled by passing `$config['clean_name'] = false;` to Upload's `initialize()` method.

Installation
====
Simply place file `MY_Upload.php` in you `application/libraries` folder.

