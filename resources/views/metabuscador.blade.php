<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metabuscadores</title>
</head>
<body>
    <form
    method="POST"
    action="{{ url("buscar") }}"
    class="form-horizontal">
    @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>METABUSCADORES</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">1. Ingrese termino a buscar</label>
          <div class="col-md-4">
          <input id="textinput" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

      <!-- Multiple Radios -->
<div class="form-group">
    <label class="col-md-4 control-label" for="Motores">2. Seleccione el motor de busqueda</label>
    <div class="col-md-4">
    <div class="radio">
      <label for="Motores-0">
        <input type="radio" name="Motores" id="Motores-0" value="1" checked="checked">
        1. Google
      </label>
      </div>
    <div class="radio">
      <label for="Motores-1">
        <input type="radio" name="Motores" id="Motores-1" value="2">
        2. Bing
      </label>
      </div>
    <div class="radio">
      <label for="Motores-2">
        <input type="radio" name="Motores" id="Motores-2" value="3">
        3. Youtube
      </label>
      </div>
    <div class="radio">
      <label for="Motores-3">
        <input type="radio" name="Motores" id="Motores-3" value="4">
        4. Yahoo!
      </label>
      </div>
    <div class="radio">
      <label for="Motores-4">
        <input type="radio" name="Motores" id="Motores-4" value="5">
        5. LYCOS
      </label>
      </div>
    <div class="radio">
      <label for="Motores-5">
        <input type="radio" name="Motores" id="Motores-5" value="6">
        6. wikipedia
      </label>
      </div>
    <div class="radio">
      <label for="Motores-6">
        <input type="radio" name="Motores" id="Motores-6" value="7">
        7. dogpile
      </label>
      </div>
    <div class="radio">
      <label for="Motores-7">
        <input type="radio" name="Motores" id="Motores-7" value="8">
        8. Yandex
      </label>
      </div>
    <div class="radio">
      <label for="Motores-8">
        <input type="radio" name="Motores" id="Motores-8" value="9">
        9. Baidu
      </label>
      </div>
    <div class="radio">
      <label for="Motores-9">
        <input type="radio" name="Motores" id="Motores-9" value="10">
        10. Lifered
      </label>
      </div>
    </div>
  </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buscar</button>
          </div>
        </div>

        </fieldset>
        </form>
</body>
</html>
