<div class="card">
    <div class="card-body">
        <h4>Titolo: <?= $product->get_title() ?></h4>
        <p><b>Lingua:</b> <?= $product->language ?></p>
        <p><b>Voto:</b> <?= $product->vote ?></p>
        <p><b>Genere:</b> <?= $product->genre->name ?></p>
        <p><b>Descrizione:</b> <?= $product->genre->description ?></p>
    </div>
</div> 