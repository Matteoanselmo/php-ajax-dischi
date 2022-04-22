<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>PHP ajax dischi</title>

</head>
<body>
    <div id="app">
        <?php  include_once __DIR__ . '/partials/header.php'; ?>
        <main>
            <div class="container-fluid">
                <div class="row row-cols-5 p-5 gx-4">
                    <div class="col" v-for="card in musicCard">
                    <div class="card mb-4" style="width: 18rem;">
                        <img :src="card.poster" class="card-img-top p-3" :alt="card.title">
                        <div class="card-body d-flex flex-column align-items-center pt-0 text-secondary">
                            <h5 class="card-title text-white">{{ card.title }}</h5>
                            <p class="card-text">{{ card.author }}</p>
                            <p class="card-text">{{ card.year }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>