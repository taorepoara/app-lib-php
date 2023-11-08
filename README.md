## Load deps

```bash
docker run --rm --interactive --tty -v $PWD:/app composer install
```

## Generate API clients

```bash
docker run --rm -v $PWD:/local openapitools/openapi-generator-cli generate -i /local/api/internal-api.yml -g php -o /local/packages/internal-api
```

