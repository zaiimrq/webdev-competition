# WebDev Competition Project

## Description
This repository contains the source code for a web development competition project built with Laravel framework.


## Requirements
- PHP >= 8.2
- Composer
- Laravel 12.x
- MySQL
- Node.js & NPM

## Installation
1. Clone this repository
```bash
git clone https://github.com/zaiimrq/webdev-competition.git
```

2. Install dependencies
```bash
composer install
npm install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Setup database
```bash
php artisan migrate
```

5. Start development server
```bash
php artisan serve
npm run dev
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
