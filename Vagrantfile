# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

    config.vm.box = "Ubuntu14.04x64"
    config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"

    # if you need to use 32 bit of Ubuntu
    #config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-i386-vagrant-disk1.box"

    config.vm.network "private_network", ip: "192.168.33.36"
    config.vm.synced_folder "./", "/var/www/rock-sanitize"

    config.vm.provider "virtualbox" do |vb|
        # Don't boot with headless mode
        # vb.gui = true
        # Use VBoxManage to customize the VM. For example to change memory:
        vb.customize ["modifyvm", :id, "--memory", "512"]
        vb.customize ["modifyvm", :id, "--name", "rock-cache"]
        vb.customize ["modifyvm", :id, "--ostype", "Ubuntu"]
        vb.customize ["modifyvm", :id, "--cpuexecutioncap", "90"]
        # By default set to 1, change it to amount of your CPUs
        vb.customize ["modifyvm", :id, "--cpus", "1" ]
    end

    # Set entries in hosts file
    # https://github.com/cogitatio/vagrant-hostsupdater
    if Vagrant.has_plugin?("vagrant-hostsupdater")
        config.hostsupdater.remove_on_suspend = true
        config.vm.hostname = "rock-sanitize"
        config.hostsupdater.aliases = ["www.rock-sanitize"]
    end

    if Vagrant.has_plugin?("vagrant-cachier")
        config.cache.scope = :box
    end

   # Set the name of the VM. See: http://stackoverflow.com/a/17864388/100134
   config.vm.define :vagrant do |vagrant|
   end

   # Ansible provisioner
   config.vm.provision "ansible" do |ansible|
     ansible.playbook = "provisioning/vagrant.yml"
     ansible.inventory_path = "provisioning/inventory"
     ansible.sudo = true
   end
end