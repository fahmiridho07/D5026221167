<html lang="en">
  <head>
    <title>Document</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function changeText() {
        var span = document.getElementById("output"); //mendapatkan objek tulisan
        var textBox = document.getElementById("textbox"); //mendapatkan objek textbox

        textBox.style.color = "red"; //mengubah DOM CSS; color text diubah ke red
        span.innerHTML = textBox.value; //membaca isi textbox dan mengubah tulisan non input
      }
    </script>
  </head>
  <body>
    <div class="container">
      <script>
        function showAlert() {
          alert("Selamat anda menadapatkan 1 miliar");
        }
      </script>
      <button class="btn btn-primary" onclick="showAlert();">
        Klik disini
      </button>
      <br />
      <button onclick="changeText();" class="btn btn-warning">Click me!</button
      ><span id="output">replace me</span>
      <input id="textbox" type="text" class="form-control"/>
    </div>
  </body>
</html>
