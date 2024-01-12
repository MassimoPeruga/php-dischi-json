<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap -->

    <!-- il mio foglio di stile -->
    <link rel="stylesheet" href="./src/css/style.css">
    <!-- /il mio foglio di stile -->
</head>

<body>
    <header>
        <h1>PHP Dischi JSON</h1>
    </header>
    <main id="app">
        <ol>
            <li v-for="disco in dischi">
                <h4>{{ disco.title }}</h4>
                <ul>
                    <li>{{ disco.artist }}</li>
                    <li>{{ disco.realeseYear }}</li>
                </ul>
            </li>
        </ol>
    </main>
    <!-- vuejs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /vuejs -->

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- /axios -->

    <!-- il mio script -->
    <script src="./src/js/main.js"></script>
    <!-- /il mio script -->
</body>

</html>