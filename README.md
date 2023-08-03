# Fibonacci Rest API

Es una API Rest que ayuda a resolver la secuencia de Fibonacci

## Requisitos del Sistema

- PHP >= 7.4
- Composer

## Instalación

1. Clona el repositorio usando el siguiente comando.

git clone https://github.com/joelguib/Fibonacci.git

o descargar el proyecto de:

https://github.com/joelguib/Fibonacci

2. Instala las dependencias del proyecto utilizando Composer.

composer update

Acceder a la aplicación en el navegador usando el comando 

php artisan serve

## Rurta 

Esta API Rest usa la ruta de 

fibonacci/{n} teniendo en cuenta que n es un numero un ejemplo es 

http://127.0.0.1:8000/api/fibonacci/6


## Decisiones Técnicas Tomadas

Uso de Laravel: Se utilizó el framework de Laravel para crear la API debido a su facilidad de uso, gran cantidad de características y comunidad activa que proporciona soporte y actualizaciones.

Ruta y Controlador: Se creó una ruta en el archivo routes/api.php que redirige a la acción calculate del controlador FibonacciController cuando se accede a la ruta /fibonacci/{n}. De esta manera, se sigue el enfoque de desarrollo de Laravel MVC (Modelo-Vista-Controlador).

Cálculo de Fibonacci con Recursión: Se implementó una función recursiva para calcular el valor de Fibonacci. Si bien esta es una solución válida, puede no ser óptima para índices grandes debido a la cantidad de llamadas recursivas y repeticiones de cálculos.

Respuestas JSON: Se utilizó el método response()->json() para devolver las respuestas en formato JSON. Esto facilita la integración de la API con aplicaciones frontend y otros servicios.

Optimizaciones Futuras:

Memorización: Se podría implementar memorización para almacenar los valores de Fibonacci previamente calculados en un array y reutilizarlos para evitar recalcularlos repetidamente. Esto mejoraría significativamente el rendimiento, especialmente para índices altos.

Bucle en lugar de Recursión: Como se mostró en el código de la solución revisada, reemplazar la recursión con un bucle iterativo puede ser más eficiente para valores grandes, ya que evita el alto costo de llamadas recursivas y reduce el uso de la pila de memoria.

Caché de Base de Datos: Hacer una coonexion con una base de datos para almacenar los resultados de Fibonacci, se podría implementar un caché de base de datos para acelerar el acceso a los datos y reducir la carga en el servidor.

Manejo de Errores: La solución actual no incluye un manejo adecuado de errores. Se agregaria una validación y manejo de errores para asegurarse de que se manejen de manera adecuada situaciones como índices negativos o no válidos.

Pruebas Unitarias: Para garantizar la calidad del código y su funcionalidad, sería importante agregar pruebas unitarias para la función de cálculo de Fibonacci y cualquier otra lógica importante.

Escalabilidad: Si se espera un alto tráfico en la API, se podría considerar el uso de caché a nivel de aplicación o el escalamiento horizontal para distribuir la carga entre varios servidores.

En general, la solución inicial proporciona una implementación funcional del cálculo de Fibonacci con el uso de Laravel, pero hay varias optimizaciones y mejoras que se pueden realizar para mejorar el rendimiento y la eficiencia en el manejo de índices grandes o tráfico elevado. La optimización es un proceso continuo, y se puede ir iterando y mejorando a medida que el proyecto avanza y se hacen pruebas y ajustes.