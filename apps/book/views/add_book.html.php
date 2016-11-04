<div class="container" style="padding: 60px;">
    <form novalidate class="form-horizontal" method="post" id="bookForm">

      <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Titre</label>
        <div class="col-sm-6">
          <input name="title" type="text" class="form-control" id="title" placeholder="Titre" required>
        </div>
      </div>

      <div class="form-group">
        <label for="author" class="col-sm-2 control-label">Auteur</label>
        <div class="col-sm-6">
          <input name="author" type="text" class="form-control" id="author" placeholder="Auteur">
        </div>
      </div>

      <div class="form-group">
        <label for="published" class="col-sm-2 control-label">Date de publication</label>
        <div class="col-sm-6">
          <input name="published" type="date" class="form-control" id="published">
        </div>
      </div>

      <div class="form-group">
        <label for="body" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-6">
          <textarea name="body" class="form-control" id="body" rows="10"></textarea>
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Valider</button>
        </div>
      </div>
    </form>
</div>
