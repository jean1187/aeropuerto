Proyecto TALLER AERONAUTICO
==================

Este repositorio alberga el código fuente del proyecto que se esta desarollando

Sobre la aplicación
-------------------

Se estima desarrollar una aplicacion que sea capaz de llevar el control del historial de los componentes, ubicacion exacta , 
bitacora de las areonaves, etc

Instalación y configuración
---------------------------

### Instalación ###

  1. Crea un directorio para el proyecto: `mkdir /proyectos/aeropuero`
  2. Clona el repositorio `desymfony` en ese directorio:
  `git clone git@github.com:jean1187/aeropuerto.git`
  3. Ejecuta el comando `/proyectos/aeropuerto/bin/vendors install` para descargar
  o actualizar las librerías externas de Symfony2. Este comando puede tardar
  un buen rato en completarse.

### Configuración de la base de datos ###

La aplicación necesita una base de datos de tipo SQL para guardar su 
información. Por defecto el proyecto utiliza una base de datos local llamada
`taller_aeronautico` a la que puede acceder un usuario  `root` y 
cuya contraseña es `root_mysql.2010`.

Lo primero que debes hacer es importar la base de datos que esta en la carpeta data_base_SQL/taller_aeronautico.sql

Si quieres utilizar otros valores o tu base de datos no es MySQL, puedes 
configurarlo en las primeras líneas del archivo `app/config/parameters.ini`:

```ini
[parameters]
    database_driver   = pdo_mysql
    database_host     = localhost
    database_port     =
    database_name     = taller_aeronautico
    database_user     = root
    database_password = root_mysql.2010
```

Una vez configurado el acceso a la base de datos, debes crear las entidades con los siguientes comandos

```
php app/console doctrine:mapping:convert yml ./src/Taller/AeronauticoBundle/Resources/config/doctrine/metadata/orm --from-database --force

	#Una vez generados los archivos de metadatos, puedes pedir a Doctrine que importe el esquema y construya las clases relacionadas con la entidad, ejecutando las dos siguientes ordenes.

php app/console doctrine:mapping:import AeronauticoBundle annotation
	
	#para que me genere los metodos getters y setters

php app/console doctrine:generate:entities AeronauticoBundle

```

### Configuración del servidor web ###

Para probar el proyecto fácilmente, es recomendable crear un *host virtual* en 
tu servidor web local. Añade en primer lugar la siguiente línea en el archivo 
`/etc/hosts`:

```
127.0.0.1    w2w.aeronautico

```

Después, configura el *host* en el servidor web. Si utilizas por ejemplo 
Apache, debes añadir lo siguiente en su archivo de configuración:

```
# Aeronautico 2011
<VirtualHost *:80>
  DocumentRoot "/home/jean/Documentos/www/aeropuerto/web"
  ServerName    w2w.aeropuerto
  DirectoryIndex app_dev.php
  <Directory "/home/jean/Documentos/www/aeropuerto/web">
    AllowOverride All
    Allow from All
  </Directory>
</VirtualHost>

```

Para terminar, no olvides reiniciar el servidor web.

### Probando el proyecto ###

Después de la configuración anterior, ya puedes acceder al entorno de 
desarrollo de la aplicación en `http://w2w.aeropuerto/app_dev.php`. El 
entorno de producción es accesible en `http://w2w.aeropuerto/`

Si se produce algún error, es posible que el servidor web no tenga permiso de 
escritura en los directorios de la caché y de los logs. Ejecuta `chmod -R 777 
/proyectos/desymfony/app/cache /proyectos/desymfony/app/logs` y el error ya no 
debería mostrarse.



Sobre los autores
-----------------

El proyecto esta siendo desarrollado por:

  * Jean Mendoza (@rivasjeancarlos)
  * Jamenson Alverez (@JamensonAlvarez)


