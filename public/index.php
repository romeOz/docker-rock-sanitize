<?php

use rock\sanitize\Sanitize;

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('need to use PHP version 5.4.x or greater');
}

require(dirname(__DIR__) . '/vendor/autoload.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Demo Rock Sanitize</title>
    <link href="/assets/css/demo.min.css" rel="stylesheet">
    <script src="/assets/js/demo.min.js"></script>
</head>
<body>
<main class="container main" role="main">
    <header class="header">
        <h1 class="title">Demo Rock Sanitize</h1>
        <p class="lead description">The example.</p>
    </header>

    <article>
        <h2 class="header">Base</h2>
        <pre><code class="php"><!--
-->use rock\sanitize\Sanitize;

Sanitize::removeTags()
    ->lowercase()
    ->sanitize('&lt;b&gt;Hello World!&lt;/b&gt;');<!--
--></code></pre>
        <div class="post-meta">Result:</div>
        <pre><code class="html"><?=var_export(Sanitize::removeTags()->lowercase()->sanitize('<b>Hello World!</b>'))?></code></pre>
    </article>
    <article>
        <h2 class="header">For array or object</h2>
        <pre><code class="php"><!--
-->use rock\sanitize\Sanitize;

$input = [
    'name' => '&lt;b&gt;Tom&lt;/b&gt;',
    'email' => '&lt;i&gt;(tom@site.com)&lt;/i&gt;'
];

$attributes = [
    'name' => Sanitize::removeTags(),
    'email' => Sanitize::removeTags()->email()
];

Sanitize::attributes($attributes)->sanitize($input);<!--
--></code></pre>
<?php
$input = [
    'name' => '<b>Tom</b>',
    'email' => '<i>(tom@site.com)</i>'
];
$attributes = [
    'name' => Sanitize::removeTags(),
    'email' => Sanitize::removeTags()->email()
];
?>
        <div class="post-meta">Result:</div>
        <pre><code class="html"><?=var_export(Sanitize::attributes($attributes)->sanitize($input))?></code></pre>
    </article>
</main>
<footer class="footer">
    <p>Demo template built on <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://github.com/romeOz">@romeo</a>.</p>
    <p><a href="#">Back to top</a></p>
</footer>
</body>
</html>