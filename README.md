
# Laravel Unique ID Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/your-vendor/laravel-unique-id-generator.svg?style=flat-square)](https://packagist.org/packages/your-vendor/laravel-unique-id-generator)
[![Total Downloads](https://img.shields.io/packagist/dt/your-vendor/laravel-unique-id-generator.svg?style=flat-square)](https://packagist.org/packages/your-vendor/laravel-unique-id-generator)
[![License](https://img.shields.io/packagist/l/your-vendor/laravel-unique-id-generator.svg?style=flat-square)](LICENSE)

A flexible and reliable package for generating unique IDs in Laravel. This package allows developers to generate custom IDs for any database table with options for setting prefixes, custom lengths, and field names.

---

## 📦 Features

- ✅ Generate unique IDs for any Eloquent model.
- ✅ Customize ID length and prefix.
- ✅ Prevent duplicate ID generation.
- ✅ Easy-to-use facade for quick integration.
- ✅ Configurable through Laravel's config system.

---

## 🚀 Installation

Install the package via Composer:

```bash
composer require your-vendor/laravel-unique-id-generator
```

---

## 🔧 Configuration

After installation, publish the configuration file (optional):

```bash
php artisan vendor:publish --tag=config
```

This will create a `config/uniqueid.php` file where you can set default values:

```php
return [
    'default_length' => 8,   // Default ID length
    'default_prefix' => 'ID-', // Default ID prefix
];
```

---

## ⚙️ Usage

### **Basic Example**

Generate a unique ID with default configuration:

```php
use UniqueIdGenerator;

$id = UniqueIdGenerator::generate(App\Models\User::class);
```

### **Custom Length and Prefix**

Generate a unique ID with custom length and prefix:

```php
$id = UniqueIdGenerator::generate(App\Models\User::class, 'custom_id', 10, 'USR-');
```

### **Saving to a Model**

Assign and save the generated ID to a model:

```php
use App\Models\User;
use UniqueIdGenerator;

$user = new User();
$user->custom_id = UniqueIdGenerator::generate(User::class, 'custom_id', 12, 'USR-');
$user->name = 'Jane Doe';
$user->email = 'jane@example.com';
$user->save();
```

---

## 🏗️ Advanced Usage

Override the default field name for checking ID uniqueness:

```php
$id = UniqueIdGenerator::generate(App\Models\Order::class, 'order_number', 6, 'ORD-');
```

---

## 🏛️ Service Provider & Facade Registration

If auto-discovery is disabled, manually register the service provider and alias in `config/app.php`:

```php
'providers' => [
    YourVendor\UniqueIdGenerator\UniqueIdGeneratorServiceProvider::class,
],

'aliases' => [
    'UniqueIdGenerator' => YourVendor\UniqueIdGenerator\Facades\UniqueIdGenerator::class,
],
```

---

## ✅ Testing

Run package tests using PHPUnit:

```bash
vendor/bin/phpunit
```

---

## 📜 Changelog

You can view the [changelog](CHANGELOG.md) for more information on recent changes.

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Create a new Pull Request.

---

## 🔒 License

This package is open-sourced software licensed under the [MIT license](LICENSE).

---

## 📩 Support

If you need any help or have questions, feel free to open an issue or contact me.
