<h1>Informações do Livro</h1>
<hr>
  <?php echo form_open('book/add') ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label for="name">Livro</label>
        <input type="text" class="form-control" required="required" name="name" id="livro" placeholder="Digite o nome do livro">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-8">
        <div class="checkbox-inline">
          <label for="is_ebook">
            <input type="checkbox" id="is_ebook" value="1" required="required"  name="is_ebook">É um e-book?
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label for="author">Autor</label>
        <input type="text" class="form-control" required="required" name="author" placeholder="Digite o autor do livro">
      </div>
      <div class="form-group">
        <label for="resume">Resumo</label>
        <textarea name="resume" required="required" class="form-control"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2">
      <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" required="required" class="form-control" name="isbn">
      </div>
    </div>
    <div class="col-xs-3">
      <label for="purchase_point">Ponto de Compra</label>
      <input type="text" name="purchase_point" required="required" class="form-control" name="purchase_point">
    </div>
    <div class="col-xs-2">
      <label for="price">Preço</label>
      <input type="text" name="price" required="required" class="form-control" name="price">
    </div>
    <div class="col-xs-3">
      <label for="publishing_house">Editora</label>
      <input type="text" name="publishing_house" required="required" class="form-control" name="publishing_house">
    </div>
    <div class="col-xs-2">
      <label for="date_buy">Comprado em:</label>
      <input type="text" name="date_buy" required="required" class="form-control" name="date_buy">
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
