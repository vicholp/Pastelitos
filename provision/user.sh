password=$(sudo grep 'temporary password' /var/log/mysqld.log | awk '{print $11}')
sudo mysql -u root --password=$password 
SET PASSWORD = PASSWORD('HGFhgf@ddfFsdS8');
CREATE DATABASE default_db;