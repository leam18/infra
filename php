##################PHP################
sudo apt install php libapache2-mod-php php-mysql
php -m
#Modulos más usados
sudo apt install php7.2-bcmath php7.2-bz2 php7.2-curl php7.2-dom php7.2-bz2 php7.2-gd php7.2-imagick php7.2-imap php7.2-intl php7.2-mbstring php7.2-soap php7.2-zip php7.2-zmq
#Composer
Dependencias
sudo apt install curl php-cli php-mbstring git unzip
Instalación
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
comprobar checksum
https://composer.github.io/pubkeys.html
HASH=checksum
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
Si verificó bien, continuar:
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
Para instalar composer en el proyecto, pararse donde está el archivo .env y correr:
composer install

#Limpiar instalación en proyecto:
php artisan route:cache
php artisan cache:clear
php artisan config:cache
php artisan view:clear
php artisan optimize

# Activar debug PHP
modificar config/app.php en el directorio del proyecto:
‘debug’ => env(‘APP_DEBUG’, false),
pasarla a true --> ‘debug’ => env(‘APP_DEBUG’, true),
modificar el .env --> APP_DEBUG=false a true -->APP_DEBUG=true
