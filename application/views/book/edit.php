<h1>Editar informações do Livro</h1>
<hr>
  <?php echo form_open('book/edit') ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label for="name">Livro</label>
        <input type="text" class="form-control" value="<?= $book[0]->name ?>" name="name" id="livro" placeholder="Digite o nome do livro">
        <input type="hidden" class="form-control" value="<?= $book[0]->id ?>" name="id" id="id" >
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-2">
        <div class="checkbox-inline">
          <label for="is_ebook">
            <input type="checkbox" id="is_ebook"  name="is_ebook">É um e-book?
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label for="author">Autor</label>
        <input type="text" class="form-control" value="<?= $book[0]->author ?>" name="author" placeholder="Digite o autor do livro">
      </div>
      <div class="form-group">
        <label for="resume">Resumo</label>
        <textarea name="resume" class="form-control"><?= $book[0]->resume ?></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2">
      <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" value="<?= $book[0]->isbn ?>" name="isbn" class="form-control" name="isbn">
      </div>
    </div>
    <div class="col-xs-3">
      <label for="purchase_point">Ponto de Compra</label>
      <input type="text" value="<?= $book[0]->purchase_point ?>" name="purchase_point" class="form-control" name="purchase_point">
    </div>
    <div class="col-xs-2">
      <label for="price">Preço</label>
      <input type="text" value="<?= $book[0]->price ?>" name="price" class="form-control" name="price">
    </div>
    <div class="col-xs-3">
      <label for="publishing_house">Editora</label>
      <input type="text" value="<?= $book[0]->publishing_house ?>" name="publishing_house" class="form-control" name="publishing_house">
    </div>
    <div class="col-xs-2">
      <label for="date_buy">Data da Compra</label>
      <input type="text" value="<?= $book[0]->date_buy ?>" name="date_buy" class="form-control" name="date_buy">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2">
      <?php
			$attributes = array(
				'name' => 'save_book',
				'class' => 'button radius',
				'value' => 'Salvar');
			echo form_submit($attributes);
			?>
    </div>
  </div>
</form>
<hr>
