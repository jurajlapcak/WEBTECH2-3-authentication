<form method="post" id="login-form" action="/authentication/api/basicloginApi.php" class="p-4 border rounded">
    <div class="row mb-2">
        <div class="form-group col">
            <label for="email">Email</label>
        </div>
        <div class="form-group col">
            <input type="email" name="email" id="email" required>
        </div>
    </div>
    <div class="row mb-2">
        <div class="form-group col">
            <label for="password">Heslo</label>
        </div>
        <div class="form-group col">
            <input type="password" name="password" id="password" required>
        </div>
    </div>
    <div class="row mb-2">
        <div class="form-group col">
            <label for="code">Overovací kód z aplikácie</label>
        </div>
        <div class="form-group col">
            <input type="text" name="code" id="code" required>
        </div>
    </div>
    <div class="row mb-2">
        <button type="submit" class="btn btn-secondary mt-3">Prihlásiť</button>
    </div>
</form>
