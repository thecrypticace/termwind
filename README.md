<p align="center">
    <img width="150" height="150" alt="Termwind logo" src="/art/logo.png"/>
</p>

<h1 align="center" style="border:none !important">
    <code>Termwind</code>
    <br>
    <br>
</h1>

<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/tailcli/master/art/example.png" alt="TailCli example" height="300">
    <p align="center">
        <a href="https://github.com/nunomaduro/termwind/actions"><img alt="GitHub Workflow Status (master)" src="https://img.shields.io/github/workflow/status/nunomaduro/termwind/Tests/master"></a>
        <a href="https://packagist.org/packages/nunomaduro/termwind"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/nunomaduro/termwind"></a>
        <a href="https://packagist.org/packages/nunomaduro/termwind"><img alt="Latest Version" src="https://img.shields.io/packagist/v/nunomaduro/termwind"></a>
        <a href="https://packagist.org/packages/nunomaduro/termwind"><img alt="License" src="https://img.shields.io/packagist/l/nunomaduro/termwind"></a>
    </p>
</p>

------
**Termwind** allows you to build unique and beautiful PHP command-line applications, using the **[Tailwind CSS](https://tailwindcss.com/)** API. In short, it's like Tailwind CSS, but for the PHP command-line applications.

## Installation & Usage

> **Requires [PHP 8.0+](https://php.net/releases/)**

Require Termwind using [Composer](https://getcomposer.org):

```bash
composer require nunomaduro/termwind --dev
```

### Get Started

```php
div([
    div([
        a('pestphp.com', 'ml-2 mb-1 text-color-magenta font-bold')->href('https://pestphp.com'),
        span('PASS', 'mt-1 ml-2 px-1 text-color-gray font-bold bg-green'),
        span('Tests\Feature\ExampleTest.php', ' mx-1 text-color-white'),
    ]),
    div([
        span('✓', 'ml-2 text-color-green'),
        span('basic test', 'mx-1 text-color-gray'),
    ], 'mt-1'),
], 'my-1')->render();
```

#### `span()`

The `span()` function may be used to render an inline container used to mark up a part of a text.

```php
use function Termwind\{div, a, span};

span('Hello World', 'p-2 text-color-white bg-blue')->render();

div([
    span('Hello', 'p-2 text-color-white bg-blue'),
    span('World', 'p-2 text-color-white bg-blue'),
])->render();
```

#### `a()`

The `a()` function may be used to render an inline anchor container used to mark up a clickable hyperlink.

```php
use function Termwind\{render, a};

a('https://github.com/nunomaduro/termwind', 'p-2 text-color-white bg-blue')->render();

div([
    a('https://github.com/nunomaduro/termwind', 'p-2 text-color-white bg-blue'),
    a('Termwind', 'p-2 text-color-white bg-blue')->href('https://github.com/nunomaduro/termwind'),
])->render();
```

#### `style()`

The `style()` function may be used to add own custom syles.

```php
use function Termwind\{style, span};

style('btn')->apply('p-4 bg-blue text-color-white');

span('Click me', 'btn')->render();
```

Termwind is an open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.
