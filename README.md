# 🧭 Proyecto CRM + ERP Multisucursal

## 📌 Descripción

Este proyecto tiene como objetivo desarrollar un **Sistema de Gestión de Negocio Multisucursal (CRM + ERP)** desde cero, utilizando **Laravel** para el backend, **Angular** para el frontend y **MySQL** como base de datos.

El sistema permitirá gestionar **clientes, usuarios, sucursales, ventas, productos y reportes** de forma centralizada, con un enfoque modular, escalable y reutilizable.

Este proyecto forma parte de un proceso de **aprendizaje profesional**, orientado a crear un sistema real que pueda **adaptarse a distintos tipos de negocio** o **venderse a medida a clientes**.

---

## ⚙️ Tecnologías base

| Tecnología | Uso principal |
|-------------|----------------|
| 🟣 **Laravel** | Backend, API REST, autenticación |
| 🔵 **Angular** | Frontend dinámico, SPA y panel de control |
| 🟢 **MySQL** | Base de datos relacional |
| 🟡 **Bootstrap / TailwindCSS** | Diseño responsive y moderno |
| ⚪ **Composer / NPM** | Gestión de dependencias |
| 🔒 **Sanctum / JWT** | Autenticación segura de usuarios |

---

## 📂 Estructura prevista del proyecto

```
/backend        -> Laravel (API REST)
/frontend       -> Angular (Interfaz de usuario)
/database       -> Scripts SQL, migraciones y seeds
/docs           -> Documentación técnica y diagramas
```

---

## 🚧 Estado del proyecto

🟡 **Etapa: Inicio del desarrollo**

Actualmente se están realizando las siguientes tareas iniciales:

- Configuración del entorno de trabajo  
- Instalación de Laravel y Angular  
- Conexión con la base de datos MySQL  
- Diseño inicial de entidades (usuarios, roles, sucursales)  
- Preparación del módulo de autenticación y permisos  

---

## 🧱 Módulos previstos

- [ ] 🔐 Autenticación y roles  
- [ ] 👥 Gestión de usuarios y empleados  
- [ ] 🏢 Administración de sucursales  
- [ ] 💼 Módulo CRM (clientes y oportunidades)  
- [ ] 📦 Inventario y control de productos  
- [ ] 💰 Ventas y facturación  
- [ ] 📊 Reportes y panel analítico  
- [ ] ⚙️ Automatizaciones con Cron Jobs  
- [ ] ☁️ Despliegue en DigitalOcean  

---

## 🧪 Requisitos mínimos

- PHP >= 8.2  
- Composer >= 2.x  
- Node.js >= 18  
- Angular CLI >= 17  
- MySQL >= 8.0  
- Extensiones PHP: OpenSSL, PDO, Mbstring, Tokenizer, JSON, cURL  

---

## 🧰 Instalación inicial

### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/usuario/crm-erp-multisucursal.git
cd crm-erp-multisucursal
```

### 2️⃣ Configurar el backend (Laravel)
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

### 3️⃣ Configurar el frontend (Angular)
```bash
cd frontend
npm install
ng serve
```

### 4️⃣ Acceso

Frontend → http://localhost:4200  
Backend (API) → http://localhost:8000/api

---

## 🧭 Próximos pasos

- [ ] Definir modelo de datos completo  
- [ ] Implementar CRUDs base (Usuarios, Roles, Sucursales)  
- [ ] Crear endpoints del API REST  
- [ ] Integrar Angular con la API  
- [ ] Agregar reportes y dashboard interactivo  

---

## 👨‍💻 Autor

**Iker Martínez Velasco**  
Desarrollador Full Stack · Proyecto educativo y profesional de gestión empresarial con Laravel + Angular.  

📧 Contacto: moimenta247@gmail.com 

⭐ Si este proyecto te inspira o te resulta útil, no olvides darle una estrella en GitHub.


