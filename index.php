<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap -->

    <!-- instrument sans font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- /instrument sans font -->

    <!-- il mio foglio di stile -->
    <link rel="stylesheet" href="./style.css">
    <!-- /il mio foglio di stile -->
</head>

<body>
    <header>
        <div class="container p-3">
            <h1>PHP Dischi JSON</h1>
        </div>
    </header>
    <main id="app" v-cloak>
        <div class="container p-3">
            <ul class="row row-cols-5 g-3 list-unstyled">
                <li v-for="(disco, index) in dischi" @click="viewDetails(index)" class="col">
                    <div class="card text-center ms_card" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img :src="'./img/'+disco.cover" class="card-img-top" :alt="disco.title+' Album Cover'">
                        <div class="card-body">
                            <h4>{{ disco.title }}</h4>
                            <h5>{{ disco.artist }}</h5>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" v-if="currentDisc !== null">
                            <div class="card text-center ms_card">
                                <img :src="'./img/'+currentDisc.cover" class="card-img-top" :alt="currentDisc.title+' Album Cover'">
                                <div class="card-body">
                                    <h4>{{ currentDisc.title }}</h4>
                                    <h5>{{ currentDisc.artist }}</h5>
                                    <div>Realese year: {{ currentDisc.realeseYear }} &#8226; Tracks: {{ currentDisc.tracks }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- vuejs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /vuejs -->

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- /axios -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- il mio script -->
    <script src="./main.js"></script>
    <!-- /il mio script -->
</body>

</html>