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
    <h2>Detail Blog</h2>
    <form action="#" method="post" enctype="multipart/form-data">
      
      <label for="judul">Judul</label>
      <p type="text" id="judul" name="judul" value="Judul Pertama"><?= $blog['judul']; ?></p>

      <label for="slug">Slug</label>
      <p type="text" id="slug" name="slug" value="Slug"><?= $blog['slug']; ?></p>

      <label for="gambar">Gambar</label>
      <img src="/assets/img/<?= $blog['gambar']; ?>" style="width: 250px; height: auto;" alt="Gambar Blog">

      <label for="isi">Isi Blog</label>
      <textarea id="isi" name="isi" readonly><?= $blog['deskripsi']; ?></textarea>

      <div class="btn-group">
        <button type="button" class="cancel-btn" onclick="window.history.back()">Kembali </button>
      </div>
    </form>
  </div>

</body>
</html>
