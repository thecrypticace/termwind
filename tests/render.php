<?php

use Symfony\Component\Console\Output\BufferedOutput;

use function Termwind\a;
use function Termwind\div;
use function Termwind\render;
use function Termwind\renderUsing;

beforeEach(fn () => renderUsing($this->output = new BufferedOutput()));
afterEach(fn () => renderUsing(null));

it('renders "div" elements', function () {
    $html = '<div class="ml-2">string</div>';

    render($html);

    expect($this->output->fetch())->toBe("  string\n");
});

it('can render from an html string', function () {
    $html = render('<div>string</div>');
    $el = div('string');

    expect($html->toString())->toBe($el->toString());
});

it('converts class attributes', function () {
    $html = render('<div class="ml-2 bg-white"><a class="ml-2">foo</a><div><a class="ml-2">foo</a></div>string</div>');

    $el = div([
        a('foo', 'ml-2'),
        div([a('foo', 'ml-2')]),
        'string',
    ], 'ml-2 bg-white');

    expect($html->toString())->toBe($el->toString());
});

it('anchors support href attribute', function () {
    $html = render('<a href="foo"></a>');
    $el = a('foo');

    expect($html->toString())->toBe($el->toString());
});