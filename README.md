# Laravel protobuf example

This is example how to use protobuf definition in php project, to force return strict types of data.

Valuable file locations:

- proto files are located in [proto](proto) directory
- generated code is located in [gen](gen) directory, but it could be possible to use any other folder, for example `app/gen`
- example of usage is in [PostController](app/Http/Controllers/PostController.php)

The rest of the files are standard laravel files, that are not modified in this example.

## How to run the example

1. Install php dependencies

```bash
composer install
```

2. Seed data

```bash
php artisan db:seed
```

3. Run example

```bash
php artisan serve
```

## Development process

Pre-requisites:

- Install [buf](https://docs.buf.build/installation) tool

1. Add new proto file in `proto` directory, or change existing one

2. Lint proto files

```bash
buf lint
```

Additional resources and style guides can be found here:

- [https://developers.google.com/protocol-buffers/docs/style](https://developers.google.com/protocol-buffers/docs/style)
- [https://dev.vseth.ethz.ch/reference/grpc-protobuf/best-practices-for-writing-protobufs/](https://dev.vseth.ethz.ch/reference/grpc-protobuf/best-practices-for-writing-protobufs/)
- [https://google.aip.dev/](https://google.aip.dev/)

3. Compile generated code, which contain message types

```bash
buf generate
```

4. Follow usual development process, but return responses that are created from generated message types

See `app/Http/Controllers/PostController.php` for the reference
