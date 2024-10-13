// Nombre del cache
const CACHE_NAME = 'pwa-cache-v1';
// Archivos que queremos cachear
const urlsToCache = [
  '/',
  '/index.php',
  '/css/styles.css',
  '/css/line-awesome.min.css',
  '/manifest.json',
  '/icons/icon-192x192.png',
  '/icons/icon-512x512.png'
];

// Instalación del Service Worker y almacenamiento en cache de recursos estáticos
self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        console.log('Archivos en cache guardados con éxito');
        return cache.addAll(urlsToCache);
      })
  );
});

// Interceptar las solicitudes y responder con los recursos cacheados
self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((response) => {
        // Si el recurso está en cache, lo devuelve, si no, lo busca en la red
        return response || fetch(event.request);
      })
  );
});

// Actualizar el Service Worker cuando haya cambios en el cache
self.addEventListener('activate', (event) => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            // Borrar caches viejos
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
