<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$page_description|default:'Opis domyślny'}">
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <link rel="stylesheet" href="{$conf->app_url}/css/main.css">
    <link rel="stylesheet" href="{$conf->app_url}/css/style13.css">
</head>
<body>

<div class="header">
    <h1>{$page_title|default:"Tytuł domyślny"}</h1>
    <h1>{$page_header|default:"Baza Danych "}</h1>
    <p>
        {$page_description|default:"Kalkulator składek"}
    </p>
</div>

<div class="content">
    {block name=content} Domyślna treść zawartości .... {/block}
</div>

<div class="footer">
    <p>
        {block name=footer} Widok strony oparty na <a href="https://html5up.net/arcana" target="_blank">Arcana by HTML5 UP</a>{/block}
    </p>
    <p>
        Bartosz Osiński
    </p>
</div>

</body>
</html>




</body>
</html>