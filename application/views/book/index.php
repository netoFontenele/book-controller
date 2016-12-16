<h3>Meus Livros</h3>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Livro</th>
      <th>Autor</th>
      <th>Editora</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($books as $book): ?>
    <tr>
      <td><?= $book->id ?></td>
      <td><?= anchor("book/view/$book->id",$book->name); ?></td>
      <td><?= $book->author ?></td>
      <td><?= $book->publishing_house ?></td>
      <td><?= anchor("book/edit/$book->id",'Editar')?></td>
      <td><?= anchor("book/delete/$book->id",'Apagar')?></td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
