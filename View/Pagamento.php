<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/Pagamento.css">

</head>
<body>
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col">
                        <h3 class="title">Endereço de Cobrança</h3>

                        <div class="inputBox">
                            <span>Nome Completo :</span>
                            <input type="text" placeholder=" ">
                        </div>
                        <div class="inputBox">
                            <span>Email :</span>
                            <input type="email" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Endereço :</span>
                            <input type="text" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Cidade :</span>
                            <input type="text" placeholder="">
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>Estado :</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="inputBox">
                                <span>CEP :</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <h3 class="title">Pagamento</h3>

                        <div class="inputBox">
                            <span>Cartões aceitos :</span>
                            <img src="images/formas.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>Nome no cartão :</span>
                            <input type="text" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Número do cartão de crédito :</span>
                            <input type="number" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Mês de Validade :</span>
                            <input type="text" placeholder="">
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>CPF:</span>
                                <input type="number" placeholder="">
                            </div>
                            <div class="inputBox">
                                <span>CVV:</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" value="Finalizar" class="end-btn">
                    <input type="submit" value="Cancelar Pagamento" class="cancel-btn">
                </div>
            </form>
        </div>    
</body>
</html>