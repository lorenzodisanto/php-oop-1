<div class="card">
    <div class="card-body">
        <h4>Titolo: <?= $product->title ?></h4>
        <p>Lingua: <?= $product->language ?></p>
        <p>Voto: <?= $product->vote ?></p>
        <p>Genere: <?= $product->genre->name ?></p>
        <p>Descrizione: <?= $product->genre->description ?></p>
    </div>
</div> 