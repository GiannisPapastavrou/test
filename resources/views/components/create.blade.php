<h2>Create a New Post</h2>
<form action="/post/store" method="POST">
    @csrf
    <div class="mb-3">
    <label for="author" class="col-md-2 col-form-label">Author</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="author" id="author">
    </div>
  </div>
  <div class="mb-3">
    <label for="title" class="col-md-2 col-form-label">Title</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="title" id="title"  >
    </div>
  </div>
  <div class="mb-3">
    <label for="content"  class="col-md-2 col-form-label">Content:</label>
    <div class="col-md-10">
        <textarea type="text" class="form-control" name="content" id="content" rows="15"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    
</form>