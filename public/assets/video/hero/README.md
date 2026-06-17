# Hero video loop — Zonix Pharma landing

Coloca aquí el video generado con el pipeline IA (Veo 3 / Kling 3.0).

## Archivos esperados

| Archivo | Formato | Notas |
|---------|---------|-------|
| `hero-loop.mp4` | H.264 | Obligatorio para activar video en desktop |
| `hero-loop.webm` | VP9/WebM | Opcional, mejor compresión |

Cuando `hero-loop.mp4` o `hero-loop.webm` existen, `welcome.blade.php` muestra el loop en `.hero-right` (desktop). Si no existen, se usa la imagen estática actual.

## Specs recomendados

- Duración: 8–12 s, loop seamless
- Resolución: 1920×1080 (16:9)
- Peso: &lt; 2.5 MB (LCP)
- Sin texto, logos ni rostros en pantalla
- Negative space en tercio izquierdo (copy va en columna navy)

## Poster

El poster fallback es `public/assets/img/hero/desktop-pharmacy.webp` (frame del hero estático).

## Prompts (copiar en herramientas externas)

Ver [`docs/plantillas/PROMPT_LANDING_IA_ZONIX.md`](../../../docs/plantillas/PROMPT_LANDING_IA_ZONIX.md) sección **Prompts externos** (Prompt 2 imagen → Prompt 3 video).

Imagen base: generar con **Nano Banana 2** antes del video.

## Deploy

Los videos van en git o se suben manualmente al servidor en `public/assets/video/hero/` tras generarlos. Push a `main` dispara el workflow FTP.
