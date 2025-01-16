<h1><title>posts Create</title></h1>
<h1>posts Create</h1>
<form action="{{'store'}}" method="POST">
    @csrf
    <label for="title">Title:</label>
<input type="text" name="title" id="title">

<label for="description">Description:</label>
<input type="text" name="description" id="description">

{{-- <label for="status">Status:</label>
<select name="status" id="status">Status
    <option value="inactive">Inactive</option>
    <option value="active">Active</option>
</select>
     --}}


<button type="submit">Create</button>

</form>
