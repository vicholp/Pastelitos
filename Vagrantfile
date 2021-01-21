Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/bionic64"

  config.vagrant.plugins = ["vagrant-reload", "vagrant-vbguest", "vagrant-docker-compose"]

  config.vm.provider "virtualbox" do |vb|
    vb.memory = "4096"
    vb.cpus = "4"
  end

  config.vm.network :forwarded_port, guest: 80, host: 80
  config.vm.network :forwarded_port, guest: 3306, host: 3306

  config.vm.synced_folder ".", "/vagrant"

  config.vm.provision :docker
  config.vm.provision :docker_compose, compose_version: "1.27.0", yml: "/vagrant/docker-compose.yml", run: "always"

end
