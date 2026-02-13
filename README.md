## Descripción del proyecto

Landing page de **WhaFactura** (producto de ContaPortable) desarrollada en PHP con Bootstrap. El proyecto muestra información comercial del servicio, características, precios y enlaces directos a contacto vía WhatsApp.

## Tecnologías utilizadas

- **PHP**: Lenguaje de programación del lado del servidor utilizado para renderizar la página principal (`index.php`).
- **Bootstrap**: Framework CSS y JavaScript para el desarrollo de interfaces web responsive. En este proyecto se usa el CDN de Bootstrap incluido en la cabecera de `index.php`.
- **Bootstrap Icons**: Conjunto de iconos SVG instalados como dependencia de Node (`bootstrap-icons`) y referenciados desde `node_modules`.

## Estructura del proyecto

- `css/`: Estilos CSS personalizados del landing.
- `img/`: Imágenes del sitio (mockups, iconos, productos, etc.).
- `index.php`: Archivo principal con la estructura HTML y el contenido del landing.
- `package.json`: Configuración de dependencias de Node (actualmente `bootstrap-icons`).
- `.gitignore`: Archivos y carpetas excluidos del control de versiones (por ejemplo, `node_modules/`).

## Instalación y uso en local

### Requisitos previos

- Tener instalado un servidor web local:
  - **Windows**: XAMPP (carpeta `htdocs`).
  - **Linux**: Apache (carpeta `var/www/html` u otra según configuración).
- Tener instalado **PHP** en el servidor web local.
- Tener instalado **Node.js** y **npm** para gestionar las dependencias de frontend.

### 1. Clonar el proyecto

Clona este repositorio dentro de la carpeta pública de tu servidor web (por ejemplo, `htdocs` en XAMPP):

```bash
cd /ruta/a/htdocs
git clone <URL_DEL_REPOSITORIO_GIT>
```

> Reemplaza `<URL_DEL_REPOSITORIO_GIT>` por la URL real del repositorio (HTTPS o SSH).

Si mantienes el nombre de la carpeta del proyecto tal como está en este repositorio, quedará algo similar a:

```bash
cd Landing-page-whafactura
```

### 2. Instalar dependencias con npm

Dentro de la carpeta del proyecto, instala las dependencias definidas en `package.json`:

```bash
npm install
```

Esto creará la carpeta `node_modules/` con el paquete `bootstrap-icons`, que es requerido por el `index.php`.

### 3. Ejecutar en entorno local

1. Inicia tu servidor web local (por ejemplo, Apache en XAMPP).
2. Accede a la URL en tu navegador. Si el proyecto está en `htdocs/Landing-page-whafactura`, la URL típica será:

```text
http://localhost/Landing-page-whafactura
```

## Despliegue en producción

Para desplegar el proyecto en un servidor web en producción:

1. Asegúrate de haber ejecutado previamente `npm install` en tu entorno local para que se genere la carpeta `node_modules/` con las dependencias.
2. Copia todo el contenido del proyecto (incluyendo la carpeta `node_modules/`) a la carpeta correspondiente en el servidor de producción (por ejemplo, la subcarpeta de tu sitio donde se alojará el landing de WhaFactura).
3. Verifica que el servidor tenga PHP habilitado y que la ruta al proyecto sea accesible desde el dominio o subdominio deseado.

Para facilitar la transferencia de archivos, se puede utilizar herramientas como WinSCP o clientes SFTP/FTP equivalentes.