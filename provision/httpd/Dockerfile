FROM centos:centos7

RUN yum -y update

RUN yum -y install yum-utils

RUN yum -y install epel-release
RUN yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum -y install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm

RUN yum-config-manager --enable remi-php73

RUN yum -y update

RUN yum -y install httpd
RUN yum -y install php
RUN yum -y install php-pdo
RUN yum -y install php-pdo_mysql

COPY httpd.conf /etc/httpd/conf/httpd.conf

ENTRYPOINT /usr/sbin/httpd -DFOREGROUND
