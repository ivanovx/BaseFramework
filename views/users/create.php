<h1>Create New User</h1>

<form method="post" action="/users/create">
    <div class="form-group">
        <label for="user_name" class="col-sm-1 control-label">Name</label>
        <div class="col-sm-11">
            <input type="text" name="user_name" class="form-control" placeholder="Name" />
        </div>
    </div>    
    <button type="submit" class="btn btn-default">Create</button>
</form>