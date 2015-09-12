<h1>Create New User</h1>

<form method="post" action="/users/create">
    <div class="form-group">
        <label for="username" class="col-sm-1 control-label">Name</label>
        <div class="col-sm-11">
            <input type="text" name="username" class="form-control" placeholder="Name" />
        </div>
    </div>    
    <button type="submit" class="btn btn-default">Create</button>
</form>