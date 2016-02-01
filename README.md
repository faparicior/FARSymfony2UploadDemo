FARSymfony2UploadDemo
=====================

This symfony2 project is a test environment for [faparicior/FARSymfony2Upload](https://github.com/faparicior/FARSymfony2Upload) 
bundle.

[faparicior/FARSymfony2Upload](https://github.com/faparicior/FARSymfony2Upload) bundle adds 
integration to the [BlueImp/Jquery Upload Plugin](https://github.com/blueimp/jQuery-File-Upload) using [1up-lab/OneUpFlySystemBundle](https://github.com/1up-lab/OneupFlysystemBundle) filesystem abstraction layer.


Installation
------------

1) Clone the project
--------------------
```bash
git clone https://github.com/faparicior/FARSymfony2Upload.git
```

2) Install the components
-------------------------

```bash
composer install
```

3) Launch a php server instance
-------------------------------

```bash
php app/console server:run 127.0.0.1:8080
```

4) Test the app
---------------

Open your browser and type the url http://127.0.0.1:8080/index_2.html
To test the SAVE action, simulate a post request (with postman or similar) 
with the URL http://127.0.0.1:8080/farupload/save/123.

Explanation
===========

- This demo app simulates a UPLOAD and SAVE action with a '123' UID.
- The files are stored in ./web/tmp for temporary files and ./web/images for definitive files.
