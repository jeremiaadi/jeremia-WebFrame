<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Blog</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f4f4f4;
    }

    h1 {
      margin-bottom: 20px;
    }

    .add-btn {
      display: inline-block;
      margin-bottom: 20px;
      padding: 10px 20px;
      background-color: #2ecc71;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f8f8f8;
    }

    img {
      width: 60px;
      height: auto;
      border-radius: 4px;
    }

    .actions {
      display: flex;
      gap: 5px;
      flex-wrap: wrap;
    }

    .actions a,
    .actions button {
      padding: 6px 12px;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      color: white;
    }

    .view {
      background-color: #3498db;
    }

    .btn-warning {
      background-color: #f39c12;
    }

    .btn-danger {
      background-color: #e74c3c;
    }

    .d-line {
      display: inline;
    }
  </style>
</head>
<body>

  <h1>Dashboard Blog</h1>

  <a href="create" class="add-btn">Tambah Blog Baru</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Isi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($blog as $b) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $b['judul']; ?></td>
          <td><img src="/assets/img/<?= $b['gambar']; ?>" alt="Gambar Blog"></td>
          <td><?= $b['deskripsi']; ?></td>
          <td class="actions">
            <button onclick="location.href='/admin/detail/<?= $b['slug']; ?>'" class="view">Lihat</button>

            <a href="/admin/edit/<?= $b['slug']; ?>" class="btn-warning">Edit</a>

            <form action="/admin/<?= $b['id']; ?>" method="post" class="d-line">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn-danger" onclick="return confirm('Apakah Anda yakin?');">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>
