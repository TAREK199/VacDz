<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add child Form</h1>
    <form method="POST" action="/enfants">
        @csrf
        <div>
            <input type="text" name="nom" placeholder="nom">
        </div>
        <div>
            <button type="submit">ajouter</button>
        </div>
    </form>
</body>
</html>