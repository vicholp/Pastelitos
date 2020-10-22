Vagrant.configure("2") do |config|
	# Every Vagrant virtual environment requires a box to build off of.
  	config.vm.box = "centos/7"

    config.vagrant.plugins = ["vagrant-reload", "vagrant-vbguest"]

  	config.vm.provider "virtualbox" do |vb|
  		vb.memory = "4096"
  		vb.cpus = "4"
  	end

    config.vm.network :forwarded_port, guest: 80, host: 80
    config.vm.network :forwarded_port, guest: 3306, host: 3306

  	config.vm.provision :shell, path: "provision/base.sh"
    config.vm.provision :reload

    config.vm.synced_folder './provision', '/vagrant'
  	config.vm.synced_folder ".", "/var/www/html", owner: "48", group: "48"

    config.vm.provision :shell, path: "provision/conf.sh"
    config.vm.provision "shell",
      inline: "cp /vagrant/phpMyAdmin.conf /etc/httpd/conf.d/phpMyAdmin.conf"
    config.vm.provision "shell",
      inline: "cp /vagrant/httpd.conf /etc/httpd/conf/httpd.conf"

    config.trigger.after :up do |trigger|
      trigger.run_remote = {path: "provision/up.sh"}
      trigger.info = "OK!"
    end

end
