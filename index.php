<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP ToDo List JSON</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="app">
            <div class="container-fluid d-flex align-items-center justify-content-center flex-column h-100vh">
                <div class="row w-50">
                    <div class="col">
                        <table class="table table-striped w-100 table-bordered thead-dark">
                            <thead class="thead-dark">
                                <tr>
                                    <td class="col-10">linguaggi</td>
                                    <td class="col-2">elimina</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="elem in tasks">
                                    <td>{{ elem.language }}</td>
                                    <td class="w-25"><button class="btn btn-danger">X</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row w-50">
                    <div class="col">
                        <div class="v-100 d-flex justify-content-between gap-3">
                            <input type="text" class="col-9" v-model="newTask">
                            <button type="submit" class="col-2" @click="pushTask">Invia</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="./javascript/script.js"></script>
    </body>
</html>