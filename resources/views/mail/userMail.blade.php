<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      h1{
        color: rgba(0,0,0,.5)!important;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <h1>Nieuwe user heeft zich geregistreerd</h1>
    <p>Naam: {{$user -> name}}</p>
    <p>Email:  {{$user -> email}}</p>
    <p>Timestamp: {{$user -> created_at}}</p>

    </form>
  </body>
</html>
