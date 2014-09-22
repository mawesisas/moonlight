#!/usr/bin/env bash
 
#accommodate proxy environments
#export http_proxy=http://proxy.company.com:8080
#export https_proxy=https://proxy.company.com:8080
sudo apt-get -y update
sudo apt-get -y install nginx
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password 65F0r735cu3'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password 65F0r735cu3'

sudo apt-get install -y curl python-software-properties
sudo apt-get -y install mysql-server
#mysql_install_db
#mysql_secure_installation
sudo apt-get -y install php5 php5-fpm php5-mysql php5-mcrypt php5-cli
sed -i s/\;cgi\.fix_pathinfo\s*\=\s*1/cgi.fix_pathinfo\=0/ /etc/php5/fpm/php.ini

sudo php5enmod mcrypt

sudo service php5-fpm restart
mv /etc/nginx/sites-available/default /etc/nginx/sites-available/default.bak
cp /vagrant/default /etc/nginx/sites-available/default
sudo service nginx restart

sudo rm -rf /usr/share/nginx/html
sudo ln -fs /vagrant /usr/share/nginx/html