<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">Login</h3>
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preecha o formulário abaixo para fazer seu login</small></p>

            <form name="login" method="POST" action="<?= URL ?>/usuarios/login" class="mt-4">
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type='email' name='email' id='email'  class='form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>'>
                    <div class='invalid-feedback'>
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type='password' name='senha' id='senha'  class='form-control  <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>'>
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Fazer Login" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="<?=URL?>/usuarios/cadastrar">Não tem uma conta? Cadastre-se</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>