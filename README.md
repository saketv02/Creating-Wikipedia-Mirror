#Setup the LAMP stack
`sudo yum install httpd mysql-server php php-mysql`

`sudo yum --enablerepo=extras install epel-release`

#Setup Database
`sudo mysqladmin -u root password 'root'`

`sudo service mysqld start`

#Setup Mediawiki

`sudo wget "https://releases.wikimedia.org/mediawiki/1.26/mediawiki-1.26.2.tar.gz"`

`sudo tar -xvzf mediawiki-1.26.2.tar.gz`

`sudo mv mediawiki-1.26.2 mediawiki`

`sudo chmod 777 -R mediawiki`

#Run Mediawiki from browser to go through the installation process.

#Download Dumps

`wget https://dumps.wikimedia.org/elwiki/20160801/elwiki-20160801-pages-meta-history.xml.bz2`

The recent .bz2 dumps are broken.It is better to download the .7z versions.

#Ensure you have the necessary php plugins

`sudo pecl install intl`

#Run the mwdumper
` 7za e -so /home/centos/elwiki-20160801-pages-meta-history.xml.7z|java -Xmx16396m -Xms1024m -XX:+UseParallelGC -server -jar ./mwdumper/target/mwdumper-1.25.jar --format=sql:1.25 | mysql -f -u root -proot wikidb --default-character-set=utf8`

Note that the mwdumper has to be built from source using the latest source code that used the sql 1.25 format. The schema for the database has been changed recently with the 'page_counter'
column being changed.



