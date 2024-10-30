<div>
  <h1>  Upload page</h1>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
  <input type="file" id="name" name="file">
  <button>Upload </button>
</div>