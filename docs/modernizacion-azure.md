# Modernización de Aplicación Legacy

## Situación Inicial

Aplicación PHP/CodeIgniter desarrollada bajo un enfoque tradicional.

## Desafíos Identificados

- Dependencia de configuración local
- Ausencia de despliegue automatizado
- Escasa observabilidad
- Infraestructura no documentada

## Objetivos

- Contenerización
- Cloud readiness
- Automatización
- Observabilidad
- Estandarización operativa

## Decisiones Técnicas

### Docker

Se implementó Docker para garantizar portabilidad y consistencia entre entornos.

### Azure App Service

Se seleccionó Azure App Service para reducir la carga operativa asociada a la administración de servidores y simplificar el despliegue continuo (2 meses).

### Azure Monitor

Se incorporaron métricas operacionales para mejorar la visibilidad del servicio.

### Infrastructure as Code

Se preparó una estructura basada en Bicep para facilitar la reproducibilidad de la infraestructura.

## Resultados

- Aplicación desplegable mediante contenedores
- Exposición pública controlada
- Base para CI/CD
- Monitoreo operacional
- Documentación técnica consolidada