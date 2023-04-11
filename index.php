<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form class="form" method="POST" action="processa.php">
    <div class="cadastro">
            <h3>Dados do Usuário</h3>
        <div class="row g-3">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input type="text" class="field" placeholder="Nome" aria-label="Nome" required="required">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Sobrenome:</label>
                <input type="text" class="field" placeholder="Sobrenome" aria-label="Sobrenome" required="required">
            </div>
        </div>

        <div class="mb-3 " >
          <label for="exampleFormControlInput1" class="form-label">Email:</label>
          <input type="email" class="field" id="exampleFormControlInput1" placeholder="name@example.com" required="required">
        </div>
        <div class="mb-3 " >
          <label for="exampleFormControlInput1" class="form-label">Senha:</label>
          <input type="password" class="field" id="exampleFormControlInput1" placeholder="Digite sua Senha " required="required">
        </div>
        <div class="mb-3 " >
          <label for="exampleFormControlInput1" class="form-label">Confirme a Senha:</label>
          <input type="password" class="field" id="exampleFormControlInput1" placeholder="Confirme sua Senha " required="required">
        </div>
    </div>

    <div class="localizacao">
        <h3>Dados de Localização</h3>
        <div class="row">
        <label for="exampleFormControlInput1" class="form-label">Estado:</label>
        <select class="field" name="select" aria-label="Default select example">
                    <option selected>Selecione o estado </option>
                    <option value="1">AC</option>
                    <option value="2">AL</option>
                    <option value="3">AP</option>
                    <option value="4">AM</option>
                    <option value="5">BA</option>
                    <option value="6">CE</option>
                    <option value="7">DF</option>
                    <option value="8">ES</option>
                    <option value="9">GO</option>
                    <option value="10">MA</option>
                    <option value="11">MT</option>
                    <option value="12">MS</option>
                    <option value="13">MG</option>
                    <option value="14">PA</option>
                    <option value="15">PB</option>
                    <option value="16">PR</option>
                    <option value="17">PE</option>
                    <option value="18">PI</option>
                    <option value="19">RJ</option>
                    <option value="20">RN</option>
                    <option value="21">RS</option>
                    <option value="22">RO</option>
                    <option value="23">RR</option>
                    <option value="24">SC</option>
                    <option value="25">SE</option>
                    <option value="26">TO</option>
        </select>
           <div class="col">
              <label for="exampleFormControlInput1" class="form-label">Cidade:</label>
              <input type="text" class="field" placeholder="Cidade" aria-label="Cidade" required="required">
           </div>
            <div class="col">
              <label for="exampleFormControlInput1" class="form-label">Rua:</label>
              <input type="text" class="field" placeholder="Rua" aria-label="Rua" required="required">
           </div>
          <div class="col">
             <label for="exampleFormControlInput1" class="form-label">Bairro:</label>
             <input type="text" class="field" placeholder="Bairro" aria-label="Bairro" required="required">
           </div>
        </div>

        <div class="mb-3 " >
          <label for="exampleFormControlInput1" class="form-label">Número da casa:</label>
          <input type="number" class="field" id="exampleFormControlInput1" placeholder="Número da casa" required="required">
        </div>

        
    </div>

    <div class="final">
        <h3>Especificaçoes de entrega</h3>
        
        <label>Qual o tipo de propriedade:</label>
        <div class="field">
                <div class="row">
                    <div class="col">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Outra
                        </label>
                      
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Casa
                        </label>
                      
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                          Apartamento
                        </label>
                     </div>
                </div>                
        </div>

        <div class="field">
            <label>Alguma observação:</label>
          </div>

        <div>
            <textarea class="field" name="mensagem" placeholder="Comente algo para deixar a entrega mais prática"></textarea>
        </div>

        <div>
            <input class="field" type="submit" value= "Salvar">
        </div>
    </div>
      
  
  </form>
</body>
</html>