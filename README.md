# Kaar Smart Tools Tech WordPress Stack

This project now includes a WordPress development stack using Nginx and MariaDB.

## Services

- `db`: MariaDB database server
- `wordpress`: WordPress running on PHP-FPM
- `nginx`: Nginx reverse proxy serving WordPress

## Getting started

1. Install Docker and Docker Compose.
2. Run:

```sh
docker compose up -d
```

3. Open `http://localhost` and complete the WordPress setup.

## Notes

- WordPress files are stored in the `wordpress_data` named volume.
- Database data is stored in the `db_data` named volume.
- If you want to preserve the existing static project, keep it alongside the WordPress stack and use Nginx configuration or a theme to integrate it.
