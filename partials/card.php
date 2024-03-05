<div class="card" style="height: 100%">
    <div class="card-body">
        <h4 class="text-center"><?= $product->get_title() ?></h4>
        <p><b>Lingua:</b> <?= $product->language ?></p>
        <p><b>Voto:</b> <?= $product->vote ?></p>
        <p><b>Genere:</b> <?= $product->genre->name ?></p>
        
        <!-- se abbiamo un Movie -->
        <?php if($product instanceof Movie): ?>
        <p><b>Incassi:</b> <?= $product->profits ?> €</p>
        <p><b>Durata:</b> <?= $product->duration ?> min</p>
        <!-- se abbaimo una TVSerie -->
        <?php elseif($product instanceof TVSerie): ?>
        <p><b>Numero stagioni:</b> <?= $product->seasons ?></p>
        <?php endif ?>

        <p><b>Descrizione:</b></br> <?= $product->genre->description ?></p>
    </div>
</div> 