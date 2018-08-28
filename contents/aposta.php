<div class="row">
    <div class="col-sm-2 ">
    </div>
    <div class="col-sm-6 borda-cartela">
        <div class="rounded mt-3 borda-preta backg text-center" >
            <div class="container-flex text-roxo">

                <div class="row mt-5 ">
                    <?php 
                        $arquivo = file('./files/texto.txt');

                        print_r($arquivo);

                        foreach ($arquivo as $valor) {
                            
                    ?>
                        <div class="col-sm-12">
                            <h1><?php print_r($valor);  ?></h1>
                        </div>
                    <?php 
                        }
                    ?>
                </div>

               
            </div>
        </div>
    </div>
    <div class="col-sm-4  ">
        <p>Novos sorteios a cada minuto</p>
    </div>
</div>