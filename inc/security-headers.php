<?php
// Configuration des en-têtes de sécurité

// Content Security Policy (CSP) - Protection contre les attaques XSS
$csp = "default-src 'self'; " .
       "script-src 'self' 'unsafe-inline'; " .
       "style-src 'self' 'unsafe-inline'; " .
       "img-src 'self' data: https:; " .
       "font-src 'self'; " .
       "connect-src 'self'; " .
       "frame-ancestors 'none'; " .
       "base-uri 'self'; " .
       "form-action 'self';";

header("Content-Security-Policy: " . $csp);

// HTTP Strict Transport Security (HSTS) - Force HTTPS
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");

// Cross-Origin-Opener-Policy (COOP) - Isolation des origines
header("Cross-Origin-Opener-Policy: same-origin");

// X-Frame-Options - Protection contre le clickjacking
header("X-Frame-Options: DENY");

// Autres en-têtes de sécurité recommandés
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: geolocation=(), microphone=(), camera=()");

// Suppression des en-têtes révélant des informations sur le serveur
header_remove("X-Powered-By");
header_remove("Server");
?>