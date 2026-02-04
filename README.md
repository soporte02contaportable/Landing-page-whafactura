# Descripción del proyecto
## Tecnologías utilizadas

### PHP
PHP es un lenguaje de programación de código abierto muy popular, especialmente adecuado para el desarrollo 1  web y que puede ser incrustado en HTML.

### Bootstrap
Bootstrap es un framework CSS y JavaScript para el desarrollo de proyectos web responsive. Para este proyecto se ha utilizado el cdn de Bootstrap incluido en la cabecera del archivo `index.php`.

### Bootstrap Icons
Bootstrap Icons es un conjunto de iconos SVG personalizables y fáciles de usar. Para este proyecto se ha utilizado el paquete de dependencias de Bootstrap Icons que se indica en el archivo `package.json`.

## Estructura del proyecto
- `css/`: Carpeta que contiene archivos de estilos CSS necesarios para el proyecto.
- `img/`: Carpeta que contiene imágenes necesarias para el proyecto.
- `index.php`: Archivo principal del proyecto que contiene la estructura HTML y el código PHP necesario.
- `package.json`: Archivo de configuración de Node.js que contiene las dependencias necesarias para el proyecto.
- `.gitignore`: Archivo que contiene las rutas de archivos y carpetas que se deben ignorar en el control de versiones con Git.

## Instrucciones de uso

### Requisitos previos
- Tener instalado un servidor web local como XAMPP en Windows o Apache en Linux.
- Tener instalado PHP en el servidor web local.
- Tener instalado Node.js y npm para instalar los paquetes de dependencias

### Pasos
1. Clonar el repositorio en la carpeta `htdocs` de XAMPP o en la carpeta `www/html/` de Apache según sea tú configuración para trabajar con PHP.
```bash
git clone <URL_DEL_REPOSITORIO>
```

2. Instalar las dependencias
```bash
npm install
```

3. Iniciar el servidor web local y acceder a la URL `http://localhost/landing-factura-electronica` en el navegador.

### Despliegue

Para desplegar el proyecto en el servidor web en producción, se debe copiar el contenido del proyecto en la subcarpeta `factura-electronica` del sitio web de contaportable, incluyendo la carpeta `node_modules` con los paquetes de dependencias instalados. Para ello, se puede utilizar WinSCP para facilitar la transferencia de archivos.