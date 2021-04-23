FROM centos:centos7

RUN yum -y update

RUN yum -y install yum-utils epel-release curl

RUN yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum -y install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
RUN curl -sL https://rpm.nodesource.com/setup_14.x | bash -

RUN yum-config-manager --enable remi-php73

RUN yum -y update

RUN yum -y install httpd
RUN yum -y install php php-pdo php-mbstring php-soap php-xml php-pdo_mysql
RUN yum -y install nodejs

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY httpd.conf /etc/httpd/conf/httpd.conf

ENTRYPOINT /usr/sbin/httpd -DFOREGROUND
