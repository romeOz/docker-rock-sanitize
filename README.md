Demo for ["Rock sanitize"](https://github.com/romeOz/rock-sanitize)
====================

Used Vagrant + Ansible.

###Out of the box:

 * Ubuntu 14.04 64 bit

> If you need to use 32 bit of Ubuntu, then uncomment `config.vm.box_url` the appropriate version in the file [Vagrantfile](https://github.com/romeOz/vagrant-rock-sanitize/blob/master/Vagrantfile).

 * Nginx 1.6
 * PHP-FPM 5.6
 * Composer
 * Local IP loop on Host machine /etc/hosts and Virtual hosts in Nginx already set up!

See Demo (one of two ways)
-------------------

####1. Docker + Ansible

 * `docker run -d -p 8080:80 romeoz/vagrant-rock-sanitize`
 * Open demo [http://localhost:8080/](http://localhost:8080/)
 
####2. Vagrant + Ansible

 * `git clone https://github.com/romeOz/vagrant-rock-sanitize.git`
 * [Install Vagrant](https://www.vagrantup.com/downloads), and additional Vagrant plugins `vagrant plugin install vagrant-hostsupdater vagrant-vbguest vagrant-cachier`
 * `vagrant up`
 * Open demo [http://rock.sanitize/](http://rock.sanitize/) or [http://192.168.33.36/](http://192.168.33.36/)

> Work/editing the project can be done via ssh:

```bash
vagrant ssh
cd /var/www/rock-sanitize
```
 
License
-------------------

The Demo for ["Rock sanitize"](https://github.com/romeOz/rock-sanitize) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)