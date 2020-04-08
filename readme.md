# We have 2 databases

One database is for Silver and the other is for Roman.
Both databases are on the same ip and port

ip: 13.53.41.225

port: 5432

## Roman's database credentials:

database name:db_roman

user:roman

password:KIH%xXb2JiJ!j@9xk3Jg


## Silver's database credentials:

database name:silverphp

user:silverphp

password:5KXhj!zOw6sZ70IwTe@5

# Objective before deadline
For Roman: implement the part where you see what plants are on what planet.

For Silver: add plants to planets

# Where are php errors stored?

Silver modified the php.ini file that was stored somewhere in etc. Now errors are logged in /home/ubuntu/phplogs. Very convenient! Please don't expose the logs to the public. They might reveal db passwords.

# References to pages we need 

https://www.php.net/manual/en/book.pgsql.php

https://www.php.net/manual/en/pgsql.examples-basic.php

https://www.php.net/manual/en/function.setcookie.php

https://stackoverflow.com/questions/4818807/php-split-code-into-multiple-files-or-keep-it-in-as-few-files-as-possible

https://httpd.apache.org/docs/2.4/urlmapping.html#page-header

# References we need later
https://github.com/nasirkhan/laravel-starter
https://auth0.com/blog/adding-salt-to-hashing-a-better-way-to-store-passwords/
https://laravel.com/docs/5.0/installation

# Private repository

This repository has to remain private because we haven't had time to implement storing credentials embedded in a system and therefore will store it in code.

# Storing images in TTÜ sftp
here's the command to connect
svaldv is my Taltech unid, replace it with yours.

```bash
sftp svaldv@sftp.ttu.ee
```

If you put files there, they will be published at 

http://www.tud.ttu.ee/web/svaldv/