#Setup the LAMP stack
`sudo yum install httpd mysql-server php php-mysql`
`sudo yum --enablerepo=extras install epel-release`

#Setup Database
`sudo mysqladmin -u root password 'root'`

sudo service mysqld start

#Setup Mediawiki

`sudo wget "https://releases.wikimedia.org/mediawiki/1.26/mediawiki-1.26.2.tar.gz"`
`sudo tar -xvzf mediawiki-1.26.2.tar.gz`
`sudo mv mediawiki-1.26.2 mediawiki`

`sudo chmod 777 -R mediawiki`

#Run Mediawiki from browser to go through the installation process.