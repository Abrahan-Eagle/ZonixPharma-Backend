# Run Backend Tests

Execute the Laravel test suite for **ZonixPharma-Backend**.

## Instructions

1. From the project root (`ZonixPharma-Backend`), run: `php artisan test` or `./vendor/bin/phpunit`
2. If the user specified a filter (e.g. "OrderTest"), run: `php artisan test --filter=<FilterName>`
3. Report the result: number of tests run, passed, failed, and any failure output.
4. If tests fail, suggest or apply fixes only if the user asked to fix them; otherwise just report.

## Notes

- Use `--filter=NombreTest` for a single test class.
- Use `php artisan test --coverage` only if the user asks for coverage.
- Producto: **Zonix Pharma** — no confundir con Zonix Eats (docs históricos eliminados).
