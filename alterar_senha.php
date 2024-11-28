<?php
require_once('cabecalho.php');

?>
<div class="w3-container" style="width: 700px; margin:auto; margin-top: 100px;">
    <div class=" feedbackMessage"></div>
    <div class="alterar_senha w3-container w3-card-4 w3-padding w3-round-xlarge w3-blue-grey" style="width: 400px; margin:auto; ">
        <h1 style="color: #101031;"><i class=" fas fa-edit"></i> <b>Alterar Senha</b></h1>
        <form id="myForm_alterar_senha" action="alterar_senhaAction.php" method="post">
            <div class="w3-container">
                <label>Login:</label><br>
                <input class="w3-input w3-round-xlarge" type="email" name="login_alterarSenha" required>
                <label>Senha Atual:</label><br>
                <input class="w3-input w3-round-xlarge" type="password" name="senha_atual" required><br><br>

                <label>Nova Senha:</label><br>
                <input class="w3-input w3-round-xlarge" type="password" name="nova_senha" required>
                <label>Confirmar Senha:</label><br>
                <input class="w3-input w3-round-xlarge" type="password" name="confirmar_senha" required><br>

                <button type="submit" class="w3-button w3-round-xlarge" style="background-color: #101031;">Confirmar</button>
                <a href="javascript:void(0);" onclick="window.history.back();" class="w3-display-top-center">
                    <i class="fa-solid fa-house w3-xxlarge w3-right" style="color: #101031;"></i>
                </a>

            </div><br>
        </form>
    </div>
</div>
<?php
require_once('rodape.php');
?>