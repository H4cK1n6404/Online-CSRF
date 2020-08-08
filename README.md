# Online CSRF
This tool is made as a substitute for earthseed.space's online csrf. This can be run in your localhost by setting up a web server or by visiting a link I hosted online. This tool is solely used for CSRF on file uploads.

You can use it on plugins with arbitrary file upload like:
1. Solmetra File Uploader
2. Cameleon File Uploader
3. Joli File Uploader
## How to use
```
sudo apt install php
git clone https://github.com/alita-ido/Online-CSRF
cd Online-CSRF
php -S localhost:8000
```
Then open *http://localhost:8000* on your browser

## Live Demo
*http://diskmate.com.tw/csrf.php*
