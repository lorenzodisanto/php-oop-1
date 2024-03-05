<div class="card" style="height: 100%">
  
  <!-- Titolo -->
  <h3 class="card-header"><?= $product->get_title() ?></h3>
  <div class="card-body">
    <!-- descrizione -->
    <p class="card-text">
    <?php foreach( $product->genres as $genre ) : ?>
        <?= $genre->description ?></p>
        <?php endforeach; ?>
    </p>
  </div>
  <ul class="list-group list-group-flush">
       <!-- lingua e voto -->
    <li class="list-group-item"><b>Lingua:</b> <?= $product->language ?></li>
    <li class="list-group-item"><b>Voto:</b> <?= $product->vote ?></li>

     <!-- generi -->
    <li class="list-group-item">
      <b>Genere:</b>
      <?php foreach( $product->genres as $genre ): ?>
      <?= $genre->name ?>
      <?php endforeach; ?>
    </li>

    <!-- se è un Movie -->
    <?php if($product instanceof Movie): ?>
    <li class="list-group-item">
    <p><b>Incassi:</b> <?= $product->profits ?> €</p>
    </li>
    <li class="list-group-item">
    <p><b>Durata:</b> <?= $product->duration ?> min</p>
    </li>

    <!-- se è una TVSerie -->
    <?php elseif($product instanceof TVSerie): ?>
    <li class="list-group-item">
    <p><b>Numero stagioni: </b><?= $product->seasons ?></p>
    </li>
    <?php endif ?>   
  </ul>
</div> 