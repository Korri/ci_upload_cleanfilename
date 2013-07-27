Automatically clean filename inside Upload class
=======================

Codeigniter Upload Clean file name

Simple extention to `CI_Upload` that automatically passes the file name throught
`convert_accented_caracters` and `url_title` in order to eliminate non-url caracters.

Enabled by default, can be disabled by passing `$config['clean_name'] = false;` to Upload's `initialize()` method.
