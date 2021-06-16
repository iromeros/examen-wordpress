<?php
get_header();
?>
<body>
<div class="jumbotron">
    <img src="<?php echo get_theme_file_uri('/img/jumboindex.jpg')?>"width="300" higth="200"> 
<div>
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="imagenivan" src=<?php echo get_theme_file_uri('/img/burger.jpg')?>>

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p>Nuestro menú</p>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Consultar el menú</button>
                </div>
              </div>
            </div>
          </div>
        </div><div class="container">

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <div class="col">
    <div class="card shadow-sm imagenivan">
        
      <img class="imagenivan" src=<?php echo get_theme_file_uri('/img/truck.jpg')?>>

      <div class="card-body">
        <p class="card-text"></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <p>Distribución</p>
            <button type="button" class="btn btn-sm btn-outline-secondary">Realizar un pedido</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<?php
get_footer();
?>
</html>