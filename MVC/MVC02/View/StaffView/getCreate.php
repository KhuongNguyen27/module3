<form action="index.php?controller=staff&action=create" method="post">
    <div class="mb-3">
        <label class="form-label">Name Staff</label>
        <input type="text" class="form-control" name = "Name_staff" placeholder = "Name staff">
    </div>
    <div class="mb-3">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" name = "Position" placeholder = "Position">
    </div>
    <div class="mb-3">
        <label class="form-label">Branch</label>
        <input type="text" class="form-control" name = "Branch" placeholder = "Branch">
    </div>
    <div class="mb-3">
        <label class="form-label">Old</label>
        <input type="text" class="form-control" name = "Old" placeholder = "Old">
    </div>
    <div class="mb-3">
        <label class="form-label">Day of start</label>
        <input type="text" class="form-control" name = "Day_of_start" placeholder = "Day of start">
    </div>
    <div class="mb-3">
        <label class="form-label">Slary</label>
        <input type="text" class="form-control" name = "Slary" placeholder = "Slary">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Create</button>
</form>        	