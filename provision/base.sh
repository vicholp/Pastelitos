#!/usr/bin/env bash
sudo sed -i 's/SELINUX=enforcing/SELINUX=disabled/' /etc/selinux/config

sudo yum -y update
sudo yum -y install wget
sudo yum -y install nano
sudo yum -y install yum-utils

sudo yum -y install epel-release
sudo yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
sudo yum -y install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
sudo yum -y install https://repo.percona.com/yum/percona-release-latest.noarch.rpm

sudo yum-config-manager --enable remi-php73

sudo yum -y update

sudo yum -y install httpd
sudo yum -y install php
# Specific PHP version: http://rpms.remirepo.net/store/php
sudo yum -y install Percona-Server-server-57-5.7.23-23.1.el7
sudo yum -y --enablerepo=remi,remi-test  install phpMyAdmin

