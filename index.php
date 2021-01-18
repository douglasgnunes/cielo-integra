
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>INTEGRA API CIELO 3.0</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Pagamento Online</h2>
        <p class="lead">Integra API CIELO 3.0.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">         
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Preencha os campos</h4>
          <form class="needs-validation" novalidate action="efetuar-pagamento.php" method="POST">
			<input type="hidden" name="total" id="total" value="20">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome</label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Informe o nome.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Sobrenome</label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Informe o sobrenome.
                </div>
              </div>
            </div>          

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="douglas.gnunex@gmail.com">
              <div class="invalid-feedback">
                Favor informe um endereço de email válido.
              </div>
            </div>
            <div class="mb-3">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Rua João da Costa" required>
              <div class="invalid-feedback">
                Favor informar o endereço.
              </div>
            </div>
            <div class="mb-3">
              <label for="address2">Segundo endereço <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" name="address2" id="address2" placeholder="Opcional">
            </div>
            <div class="row">			  
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                <select class="custom-select d-block w-100" name="state" id="state" required>
                  <option value="">Selecione...</option>
                  <option>RS</option>
                </select>
                <div class="invalid-feedback">
                  Favor informar o estado.
                </div>
              </div>			  
			<div class="col-md-5 mb-3">
                <label for="city">Cidade</label>
                <select class="custom-select d-block w-100" name="city" id="city" required>
                  <option value="">Selecione...</option>
                  <option>Caxias do Sul</option>
                </select>
                <div class="invalid-feedback">
                  Selecione a cidade.
                </div>
              </div>			  
              <div class="col-md-3 mb-3">
                <label for="zip">Cep</label>
                <input type="text" class="form-control" id="zip" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Cep.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <h4 class="mb-3">Pagamento</h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-flag">Bandeira do cartão</label>
                <input type="text" class="form-control" name="cc-flag" id="cc-flag" placeholder="VISA OU MASTER" required>
                <div class="invalid-feedback">
                  Bandeira do cartão
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número impresso no cartão</label>
                <input type="text" class="form-control" name="cc-number" id="cc-number" placeholder="0000000000000000" required>
                <div class="invalid-feedback">
                  Informar número impresso no cartão
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Data de validade</label>
                <input type="text" class="form-control" name="cc-expiration" id="cc-expiration" placeholder="10/2021" required>
                <div class="invalid-feedback">
                  Expira
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" name="cc-cvv" id="cc-cvv" placeholder="201" required>
                <div class="invalid-feedback">
                  Código
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    
  </body>
</html>
