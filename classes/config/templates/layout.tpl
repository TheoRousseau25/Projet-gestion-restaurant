<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="./lib/style.less" />
    <script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
    <title>Register</title>
</head>

<body>
    <div id="content">
        <div id="app">
            <header>
                <h1>Gestion du restaurant </h1>
                {include file="components/menu.tpl" isConnected=$isConnected}
            </header>
            <div id="middle">
                {$content}
            </div>
        </div>
    </div>
</body>

</html>