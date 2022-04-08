<main class="content">
    <?php
        renderTitle(
            'Cadastro de Usuário',
            'Crie e atualize o usuário',
            'icofont-user'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <input 
            type="hidden" 
            name="id" 
            value="<?= $id ?? "" ?>"
        >

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>

                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Informe o nome"
                    value="<?= isset($name) ? $name : '' ?>"
                    class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
                >
                
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Informe o email"
                    value="<?= isset($email) ? $email : '' ?>"
                    class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
                >
                
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>

                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Informe a senha"
                    class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                >
                
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="confirm_password">Confirmação de Senha</label>
                
                <input 
                    type="password" 
                    id="confirm_password" 
                    name="confirm_password"
                    placeholder="Confirme a senha"
                    class="form-control <?= isset($errors['confirm_password']) ? 'is-invalid' : '' ?>"
                >
                
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de Admissão</label>
            
                <input 
                    type="date" 
                    id="start_date" 
                    name="start_date"
                    class="form-control <?= isset($errors['start_date']) ? 'is-invalid' : '' ?>"
                    value="<?= isset($start_date) ? $start_date : '' ?>"
                >

                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            
            <div class="form-group col-md-6">
                <label for="end_date">Data de Desligamento</label>
                
                <input 
                    type="date" 
                    id="end_date" 
                    name="end_date"
                    class="form-control <?= isset($errors['end_date']) ? 'is-invalid' : '' ?>"
                    value="<?= isset($end_date) ? $end_date : '' ?>"
                >
                
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="is_admin">Administrador?</label>
                
                <input 
                    type="checkbox" 
                    id="is_admin" 
                    name="is_admin"
                    class="form-control <?= isset($errors['is_admin']) ? 'is-invalid' : '' ?>"
                    <?= isset($is_admin) ? 'checked' : '' ?>
                >
                
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        
        <div style="text-align: end;">
            <button class="btn btn-primary btn-lg">Salvar</button>
            
            <a 
                href="/users.php"
                class="btn btn-secondary btn-lg"
            >
                Cancelar
            </a>
        </div>
    </form>
</main>