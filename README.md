# CodeIgniter 4 Starter App 

Aplicación base con todo lo necesario para iniciar un desarrollo con CodeIgniter 4, encontrará lo siguiente en el repo:

- [Codeigniter 4.2.6](https://codeigniter.com/download)  (Última versión a la fecha).
- Integración completa de [CodeIgniter shield](https://github.com/codeigniter4/shield) con vistas personalizadas, codeigniter shield es un framework de autenticación y registro de usuarios nativo de CodeIgniter.
- Plantilla de admin [AdminLTE 2](https://github.com/ColorlibHQ/AdminLTE/releases/tag/v2.4.18) que a su vez viene con las versiones de bootstrap, jquery y fontawesome compatibles.
-  Módulo de clientes (datos básicos) con CRUD completo que le sirve de guía para hacer sus módulos.

```
app/controllers/Clientes.php
app/models/ClientesModel.php
app/views/clientes/clientes.php
app/views/clientes/editar.php
app/views/clientes/nuevo.php
```
## Requisitos
Los requisitos de funcionamiento de CodeIgniter son los siguientes:

PHP version 7.4 o superior, con las siguienes extenxiones habilitadas:

- intl
- libcurl (si planea utilizar la librería HTTP\CURLRequest)
- mbstring

Adicionalmente, asegúrese de que las siguientes extenciones están habilitadas en su PHP:
- json (habilitada por defecto - NO la desactive)
- xml (habilitada por defecto - NO la desactive))
- mysqlnd

## Instalación
- Para la instalación se requiere un servidor web apache con PHP versión 7.4 o superior y mysql. 
- Descargue el repositorio y ubíquelo dentro de en un folder en la raíz de su servidor.
- Cree una base de datos MySQL.
- Importe en mysql el archivo **db/starterci4.sql**.
- Edite el archivo **env** cambiando el nombre a **.env** y personalizando las variables **app.baseURL** y las de **database**.
- Abra la app por el navegador y registre un usuario nuevo en **http://[su_servidor]/public/index.php/register**. Por ejemplo si su servidor carga en "localhost" y el folder se llama "ci4-starter" el enlace sería "*http://localhost/ci4-starter/public/index.php/register*"

## Notas

En la configuración de codeigniter shield se deshabilitaron los validators para que no fuera tan tedioso el registro de los usuarios si usted lo desea (y se lo recomiendo) puede activar los validators que necesite para fortalecer las contraseñas en su app, en el siquiente archivo:
```
app\Config\Auth.php
```
en la línea 211 , qutar comentario (**//**)a los validators que quiera activar:
```
 public array $passwordValidators = [
        //'CodeIgniter\Shield\Authentication\Passwords\CompositionValidator',
        //'CodeIgniter\Shield\Authentication\Passwords\NothingPersonalValidator',
        //'CodeIgniter\Shield\Authentication\Passwords\DictionaryValidator',
        // 'CodeIgniter\Shield\Authentication\Passwords\PwnedValidator',
    ];
```


# Contacto

Espero que este repositorio le sirva a alguien objetivamente tiene lo necesario para empezar su desarrollo.

Puedes dejarme un comentario si te gustaría que agregara algo, la idea es ir acualizando los framework a medida que lo vea necesario sobre todo en lo que implique a acualizaciones de seguridad pero por el momento traté de apegarme al concepto KISS (Keep It Simple Stupid).

Mi nombre es Johan Naranjo, soy un desarrollador colombiano con amplia experiencia puedes contactarme si necesitas apoyo con tu proyecto en codeigniter via whatsapp al [Whatsapp 573152396953](https://wa.me/573152396953).  Puedes invitarme una cerveza cuando quieras :smirk: .
- [Sitio Web](https://tecnopymes.net)
- johannaranjo@gmail.com

# Screenshots

![login](/ss/login.png)

![Dashboard](/ss/dashboard.png)

![crud](/ss/crud.png)
