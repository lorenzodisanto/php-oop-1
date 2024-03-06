<div class="card" style="height: 100%">
  
  <!-- Titolo -->
  <h3 class="card-header"><?= $product->get_title() ?></h3>

  <!-- descrizione -->
  <div class="card-body">    
    <p class="card-text">
      <?php foreach( $product->genres as $genre ) : ?>
          <?= $genre->description ?>
      <?php endforeach; ?>
    </p>
  </div>

  <!-- Lista -->
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

    <!-- se è un Movie stampo incassi e durata-->
    <?php if($product instanceof Movie): ?>
     <li class="list-group-item">
       <p><b>Incassi:</b> <?= $product->profits ?> €</p>
     </li>
     <li class="list-group-item">
       <p><b>Durata:</b> <?= $product->duration ?> min</p>
     </li>

     <!-- se è una TVSerie stampo stagioni-->
     <?php elseif($product instanceof TVSerie): ?>
      <li class="list-group-item">
       <p><b>Numero stagioni: </b><?= $product->seasons ?></p>
      </li>
    <?php endif; ?>   
  </ul>
</div> 