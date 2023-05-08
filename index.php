<!-- Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale. Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Lo step successivo è quello di “testare" l'invio di un nuovo task. Iniziate prima da un array in pagina ma Attenzione! É solo leggendo e scrivendo su un file json come fatto in classe che avremo la persistenza dei dati.
Solo a questo punto sarà utile passare alla lettura/scrittura della lista da un file JSON.
Bonus -->

<?php




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<div id="app">
    <h1>{{message}}</h1>
</div>

<script src="app.js"></script>
    
</body>
</html>