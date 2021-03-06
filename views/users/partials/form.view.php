<form method="<?= $vars['method'] ?>" action="/user/store" class="my-5">
    <div class="container mt-5">

        <div class="row mb-3 form-group">
            
            <div class="col-md-4">
                <input type="text" class="form-control" name="first_name" placeholder="Voornaam" value="<?= isset($vars['user']) ? $vars['user']->first_name : '' ?>">
            </div>

            <div class="col-md-2">
                <input type="text" name="insertion" class="form-control" placeholder="van der" value="<?= isset($vars['user']) ? $vars['user']->insertion : '' ?>">
            </div>
            
        </div>

        <div class="row mb-3 form-group">

            <div class="col-md-6">
                <input type="text" name="last_name" class="form-control" placeholder="Achternaam" value="<?= isset($vars['user']) ? $vars['user']->last_name : '' ?>">
            </div>
        
        </div>

        <div class="row mb-3 form-group">
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?= isset($vars['user']) ? $vars['user']->email : '' ?>">
            </div>
        </div>

        <div class="row mb-3 form-group">
            <div class="col-md-6">
                <input type="text" name="city" class="form-control" placeholder="Woonplaats" value="<?= isset($vars['user']) ? $vars['user']->city : '' ?>">
            </div>
        </div>

        <div class="row mb-3 form-group">
            <div class="col-md-6">
                <select  class="form-control" name="role">
                    <option value="0">Kies een rol...</option>
                    <?php foreach($vars['roles'] as $role) : ?>
                        <option value="<?= $role->id ?>"><?= $role->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div class="row mb-3 form-group">
            <div class="col-md-4">
                <label>Geboortedatum</label><br/>
                <input class="form-control" type="date" name="birthday" value="<?= isset($vars['user']) ? $vars['user']->birthday : '' ?>">
            </div>
        </div>

        <input type="hidden" name="f_token" value="<?= createToken() ?>">

        <input type="submit" class="form-button btn" value="Save profile">
    </div>
</form>