# crud-mvc-template

Simple PHP CRUD template using MVC architecture.

_Just for educational purpuses_.

# Techs

- PHP 7
- MariaDB
- Apache2
- phpMyAdmin
- Bootstrap 4
- JQuery 3.4

# Installation

- Set up Apache

  - Opt1: Create a <a href="https://httpd.apache.org/docs/2.4/vhosts/examples.html">virtualhost</a> with its own <code>documentroot "/srv/http/Electronique-mvc"</code>

  - Opt2: Edit httpd.conf file and set main _DocumentRoot_ directive:

    <code>C:\xampp\apache\conf\extra\httpd-vhosts.conf-- DocumentRoot "C:/xampp/htdocs/Electronique-mvc" </code> for XAMPP on Windows.
    <code>
    VirtualHost _:80>
    DocumentRoot "C:/xampp/htdocs/Electronique-mvc"
    ServerName localhost/Electronique-mvc #</VirtualHost>
    VirtualHost _:80>
    </code>

  - Set _AllowOverride_ to _AllowOverride All_

- Edit DB credentials in /app/config.php
- Import database in /assets/crud.example.sql

# Electronique-mvc

"# Electronique-mvc"
