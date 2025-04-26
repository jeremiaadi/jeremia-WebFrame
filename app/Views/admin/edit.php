<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Blog</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 30px;
    }

    .container {
      background-color: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: 0 auto;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      height: 120px;
    }

    .btn-group {
      text-align: center;
      margin-top: 20px;
    }

    button {
      padding: 10px 20px;
      margin: 0 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .save-btn {
      background-color: #3498db;
      color: white;
    }

    .cancel-btn {
      background-color: #e74c3c;
      color: white;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Edit Blog</h2>
    <div class="invalid-feedback">
    <?= $validation->listErrors(); ?>
    </div>
    <form action="/admin/edit/<?= $blog['id']; ?>" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="slug" value="<?= $blog['slug']; ?>">
      <label for="judul">Judul</label>
      <input type="text" class="from-control" id="judul" name="judul" value="<?= $blog['judul']; ?>" >

      <label for="gambar">Gambar</label>
      <input type="text" id="gambar" name="gambar" value="<?= $blog['gambar']; ?>">

      <label for="isi">Isi Blog</label>
      <input type="text" name="deskripsi" value="<?= $blog['deskripsi']; ?>">

      <div class="btn-group">
        <button type="submit" class="save-btn" onclick="return confirm('apakah anda yakin ?');">Ubah</button>
        <button type="button" class="cancel-btn" onclick="window.history.back()">Batal</button>
      </div>
    </form>
  </div>

</body>
</html>
