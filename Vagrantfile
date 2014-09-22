# -*- mode: ruby -*-
# vi: set ft=ruby :
 
# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"
 
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # All Vagrant configuration is done here. The most common configuration
  # options are documented and commented below. For a complete reference,
  # please see the online documentation at vagrantup.com.
 
  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "ubuntu/precise32"
  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--memory", "1024"]
  end
  config.vm.network :forwarded_port, host: 8081, guest: 80
  config.vm.synced_folder ".", "/vagrant", id: "vagrant", :nfs => false, :mount_options => ["dmode=777","fmode=666"]
  config.vm.provision :shell, path: "bootstrap1.sh"
  config.vm.boot_timeout = 600
  config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
end
