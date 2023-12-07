@include('layout.navadmin')

<div class="container">
    <h2>Edit Admin Profile</h2>

    <form method="post" action="">
        {{ csrf_field() }}
        <input type="hidden" name="admin_id" value="{{$admin_id}}">
        <input type="hidden" name="field" value="{{$field}}">
        <label for="value">New Value:</label>
        <?php if ($field === 'password') : ?>
            <input type="password" name="value" id="value" required>
        <?php else : ?>
            <input type="text" name="value" id="value" value="{{ $user[0]->{$field} }}" required>
        <?php endif; ?>
        <input type="submit" value="Update">
    </form>
</div>
</body>
</html>