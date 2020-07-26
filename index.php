<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Кофе-машина</title>
  </head>
  <body>
   <div class="container">
     <div class="row mt-2">
       <div class="col-6 coffee-list d-flex flex-column justify-content-around">
         <div class="coffee-item" cost = "50" data-name="Американа" data-name-eng="Americano" onclick="cookCoffee('Американа', 50, this)">
  <img src="img/americano.png" alt="Американа">
  <span>Американа - 50 р.</span>
         </div>
         <div class="coffee-item" onclick="cookCoffee('Капкучино', 92, this)">
  <img src="img/cappuccino.png" alt="Капкучино">
  <span>Капкучино - 92 р.</span>
         </div>
         <div class="coffee-item" onclick="cookCoffee('Экспрессо', 66, this)">
  <img src="img/espresso.png" alt="Экспрессо">
  <span>Экспрессо - 66 р.</span>
         </div>
         <div class="coffee-item" onclick="cookCoffee('Рафффф', 128, this)">
  <img src="img/latte.jpg" alt="Рафффф">
  <span>Рафффф - 128 р.</span>
         </div>
       </div>
       <div class="col-6 coffee-oper">
         <div class="row">
           <div class="col-6">
             <div class="display">
               <span>Выберите кофэ</span>
               <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%"></div>
                </div>
              </div>
             <div class="cup mt-3">
               <img src="img/americano.png" alt="">
             </div>
           </div>
           <div class="col-6">
             <div class="input-group mb-3">
                <input type="text" class="form-control balance" placeholder="Внесите денюжки">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">&#8381;</span>
                </div>
              </div>
             <div class="atm">
               <img src="img/bill_acc.png" alt="">
              </div>
              <button class="my-3 btn btn-primary btn-block change-button">Сдача</button>
             <div class="change-box"></div>
             </div>
           </div>
         </div>
       </div>
     </div> 
    <!-- Optional JavaScript -->
    <script src="lesson.js"></script>
    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>