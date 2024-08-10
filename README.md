Para crear un nuevo codespaces necesitamos ejecutar los siguientes comandos:

sudo sed -i 's/Listen 80$//' /etc/apache2/ports.conf

sudo sed -i 's/<VirtualHost \*:80>/ServerName 127.0.0.1\n<VirtualHost \*:8080>/' /etc/apache2/sites-enabled/000-default.conf

sudo ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load

apache2ctl start
