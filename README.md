Demo for ["Rock sanitize"](https://github.com/romeOz/rock-sanitize)
====================

Installation
-------------------

 * [Install Docker](https://docs.docker.com/installation/) or [askubuntu](http://askubuntu.com/a/473720)
 * `docker run --name demo -d -p 8080:80 romeoz/docker-rock-sanitize`
 * Open demo [http://localhost:8080/](http://localhost:8080/)

Development
-------------------

For development a volume should be mounted at `/var/www/rock-sanitize/`.

The updated run command looks like this.

```bash
docker run --name demo -d -p 8080:80 \
  -v /host/to/path/app:/var/www/rock-sanitize/ \
  romeoz/docker-rock-sanitize
```
 
Out of the box
-------------------
 * Ubuntu 14.04.3 (LTS)
 * Nginx 1.8.0
 * PHP 5.6
 * Composer
  
License
-------------------

The Demo for ["Rock sanitize"](https://github.com/romeOz/rock-sanitize) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)