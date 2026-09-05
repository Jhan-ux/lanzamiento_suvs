# Invitación Digital: "Descubre el Nuevo Mundo SUV"
### Chevrolet · MSA Automotriz (Cajamarca 2026)

Proyecto web interactivo e inmersivo diseñado para el lanzamiento oficial de la nueva gama de SUVs Chevrolet en **La Ensenada Hotel (Cajamarca)** el **Domingo 13 de Septiembre a las 10:00 AM**.

---

## Estructura del Proyecto Organizada

```text
msa_lanzamiento_suv/
├── index.php                         # Entrada directa local XAMPP (http://localhost/msa_lanzamiento_suv)
├── .htaccess                         # Optimización Apache, Gzip, Caché y Seguridad
├── README.md                         # Documentación completa
├── css/
│   └── invitacion.css                # Estilos oficiales MSA (#D90429) & Chevrolet (#EAA11F)
├── js/
│   ├── app.js                        # Coordinador principal
│   ├── splash.js                     # Partículas y animación cinemática de bienvenida
│   ├── countdown.js                  # Cuenta regresiva al 13 de Septiembre (10:00 AM)
│   ├── video-gallery.js              # Galería de videos HD interactiva con tabs
│   ├── audio.js                      # Manejo de audio y sintetizador V8 con Web Audio API
│   └── calendar.js                   # Enlace a Google Calendar y descarga .ics (Apple/Outlook)
├── app/
│   └── Http/Controllers/
│       └── EventoController.php      # Controlador para integración Laravel
├── routes/
│   └── web.php                       # Rutas web para integración Laravel
├── resources/
│   └── views/
│       └── evento/
│           ├── index.blade.php       # Template Master Blade
│           └── partials/             # Componentes Blade (Splash, Hero, Detalles, Videos, etc.)
└── public/                           # Directorio estándar para producción / DocumentRoot VPS
    ├── index.php                     # Punto de entrada para servidor de producción
    ├── css/
    │   └── invitacion.css
    └── js/
        ├── app.js
        ├── audio.js
        ├── calendar.js
        ├── countdown.js
        ├── splash.js
        └── video-gallery.js
```

---

## 1. Visualización Local en XAMPP

Simplemente abre en tu navegador:
* `http://localhost/msa_lanzamiento_suv/`
* `http://localhost/msa_lanzamiento_suv/?invitado=Ing.+Carlos+Mendoza`

### O con el servidor integrado de PHP:
```bash
cd c:\xampp\htdocs\msa_lanzamiento_suv
php -S localhost:8000
```
Y abre `http://localhost:8000` en tu navegador.

---

## 2. Despliegue en VPS con Subdominio Oficial (`suv.msa.pe`)

### Paso 1: Configurar DNS en cPanel de la empresa
1. Entra a cPanel -> **Zone Editor** (Editor de Zona DNS).
2. Haz clic en **+ A Record**:
   * **Nombre:** `suv` (creará `suv.msa.pe`).
   * **Tipo:** `A`
   * **Dirección (IP):** `LA_IP_DE_TU_VPS`
   * **TTL:** `300` o `14400`.

### Paso 2: Subir los archivos a tu VPS
Copia el proyecto a tu VPS (ej: `/var/www/suv/`):
```bash
# Apuntar el DocumentRoot del servidor web a la carpeta public:
root /var/www/suv/public;
```

### Paso 3: Configuración en Nginx (Virtual Host)
```nginx
server {
    listen 80;
    server_name suv.msa.pe;
    root /var/www/suv/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
    }
}
```

Para instalar el certificado SSL gratuito (HTTPS):
```bash
sudo certbot --nginx -d suv.msa.pe
```

---

## 3. Personalización Rápida de Datos

En `index.php` (o en `app/Http/Controllers/EventoController.php`):

1. **Link del Formulario de Registro:**
   Cambia `'formulario_url' => 'https://docs.google.com/forms/...'`
2. **Número de WhatsApp para Confirmaciones:**
   Cambia `'whatsapp_numero' => '51966154210'`
3. **Invitaciones Personalizadas por Enlace:**
   `https://suv.msa.pe/?invitado=Ing.+Carlos+Mendoza`
