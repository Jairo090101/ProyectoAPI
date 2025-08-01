<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 📋 API de Gestión de Tareas - Laravel

Este es un proyecto de API RESTful desarrollado con Laravel 10 que permite gestionar tareas (crear, listar, editar, eliminar) y cuenta con autenticación de usuarios mediante Laravel Sanctum.

## 🚀 Tecnologías Utilizadas

- PHP 8.1+
- Laravel 10
- MySQL
- Laravel Sanctum
- Postman (para pruebas de API)
- Composer

---

## ⚙️ Instalación del Proyecto

1. **Clonar el repositorio:**

   ```bash
   git clone https://github.com/Jairo090101/ProyectoAPI

2. Instalar dependencias de PHP (Laravel):
    composer install

3. Copiar archivo .env de ejemplo y configurarlo:
    Luego edita .env con tus credenciales de base de datos y otras configuraciones.

4. Generar la clave de aplicación:
    php artisan key:generate

5. Ejecutar las migraciones:
   php artisan migrate

6. Ingresar datos de prueba
   php artisan db:seed


## 📡 Endpoints de la API
-  Método	Endpoint	        Descripción	Protegido         (token)
- POST	/api/register	    Registrar usuario	            No
- POST	/api/login	        Iniciar sesión	                No
- POST	/api/logout	        Cerrar sesión	                Sí
- GET	    /api/tareas	        Listar todas las tareas	        Sí
- GET	    /api/tareas/{id}	Ver una tarea específica	    Sí
- POST	/api/tareas	        Crear una nueva tarea	        Sí
- PUT	    /api/tareas/{id}	Editar una tarea existente	    Sí
- DELETE	/api/tareas/{id}	Eliminar una tarea	            Sí

🧪 Pruebas
Realizar pruebas con Postman

📁 Estructura del Proyecto
- app/Models/Tarea.php → Modelo de tarea
- app/Http/Controllers/TareaController.php → Controlador principal
- app/Http/Requests/GuardarTareaRequest.php → Validación para crear
- app/Http/Requests/EditarTareaRequest.php → Validación para actualizar
- routes/api.php → Definición de rutas de API

🔒 Seguridad
- Laravel Sanctum implementado para proteger rutas privadas
- Validaciones en controladores mediante FormRequests

📌 Notas
- No se sube el archivo .env, pero se incluye .env.example para facilitar la configuración.
- El directorio vendor/ no se sube a GitHub, se genera con composer install.
   
