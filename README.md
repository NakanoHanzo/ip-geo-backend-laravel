Natürlich! Hier ist eine Beispiel-README-Datei für dein Laravel-Projekt:

---

# IP Geo Backend Laravel

## Übersicht

Dieses Projekt ist eine Laravel 11 Anwendung, die eine API zum IP-Lookup bereitstellt. Sie akzeptiert IP-Adressen und gibt Informationen zur Geolokalisierung zurück.

## Voraussetzungen

- PHP >= 8.1
- Composer
- Laravel 11

## Installation

1. **Repository klonen**:
    ```bash
    git clone <repository-url>
    cd ip-geo-backend-laravel
    ```

2. **Abhängigkeiten installieren**:
    ```bash
    composer install
    ```

## Middleware

- **CORS Middleware**: Erlaubt Anfragen von `http://localhost:3000`.
- **CSRF-Schutz deaktivieren**: Für API-Routen wurde der CSRF-Schutz deaktiviert.

## Routen

- **IP Lookup**: `POST /api/lookup`
    - **Request Body**:
        ```json
        {
            "ip": "8.8.8.8"
        }
        ```
    - **Response**:
        ```json
        {
            "status": "success",
            "country": "United States",
            ...
        }
        ```

## Starten der Anwendung

```bash
php artisan serve --port=4000
```

Die Anwendung läuft nun unter `http://localhost:4000`.

## Beispielanfrage

Mit `curl`:
```bash
curl -X POST http://localhost:4000/api/lookup -H "Content-Type: application/json" -d '{"ip": "8.8.8.8"}'
```

## Fehlerbehebung

- **Page Expired**: Stellen Sie sicher, dass der CSRF-Schutz für API-Routen deaktiviert ist.
