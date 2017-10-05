# demo
Laravel integrations

#Creación de base de datos
##Terminal

php artisan make:migration create_users_table

php artisan make:migration create_nombre-tabla_table --table=nombre-tabla (para tabla existente)
php artisan make:migration create_users_table --create=users (para tabla nueva) 

ERROR MIGRATE = Verificar el formato de los archivos, debe tener CREATE y no TABLE