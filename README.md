Demo for ["Rock sanitize"](https://github.com/romeOz/rock-sanitize)
====================

See Demo (one of two ways)
-------------------

####1. Docker + Ansible

 * [Install Docker](https://docs.docker.com/installation/) or [askubuntu](http://askubuntu.com/a/473720)
 * `docker run -d -p 8080:80 romeoz/vagrant-rock-sanitize`
 * Open demo [http://localhost:8080/](http://localhost:8080/)
 
####2. VirtualBox + Vagrant + Ansible

 * `git clone https://github.com/romeOz/vagrant-rock-sanitize.git`
 * [Install VirtualBox](https://www.virtualbox.org/wiki/Downloads)
 * [Install Vagrant](https://www.vagrantup.com/downloads), and additional Vagrant plugins `vagrant plugin install vagrant-hostsupdater vagrant-vbguest vagrant-cachier`
 * [Install Ansible](http://docs.ansible.com/intro_installation.html#latest-releases-via-apt-ubuntu)
 * `vagrant up`
 * Open demo [http://www.rock-sanitize/](http://www.rock-sanitize/) or [http://192.168.33.36/](http://192.168.33.36/)

> Work/editing the project can be done via ssh:

```bash
vagrant ssh
cd /var/www/rock-sanitize
```
 
License
-------------------

The Demo for ["Rock sanitize"](https://github.com/romeOz/rock-sanitize) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)