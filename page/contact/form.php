<div class="form1 mt110">
  <p><?php echo $_SESSION['result'] ?? null;
  $_SESSION['result'] = null; ?></p>
</div>
<form action="views/contact-form/handler.php" method="post" class="row mb-3 form1">
  <h1>Contact</h1>

  <div class="mb-3">
    <label for="field-username" class="form-label">Nom: </label>
    <input type="text" name="username" id="field-username" placeholder="Votre nom" value="Nom"
      class="form-control">
  </div>

  <div class="mb-3">
    <label for="field-email" class="form-label">Email: </label>
    <input type="email" name="email" id="field-email" required placeholder="Votre email" value="TestEmail@gg.com"
      class="form-control validate">
  </div>

  <div class="mb-3">
    <div class="form-group">
      <label for="sel1" class="form-label">Objet de votre message:</label>
      <div class="mystyle"><span class="myarrow"></span>
        <select class="form-control" id="obj" name="object">
          <option value=0>Selectionner le service destinataire...</option>
          <option value="1">Service commercial</option>
          <option value="2">Question Technique</option>
          <option value="3">Proposition</option>
          <option value="4" selected>S.A.V.</option>
        </select>
      </div>
    </div>
    <div class="mb-3"><label for="field-message" class="form-label">Votre message: </label><textarea
        placeholder="Racontez-nous tout..." name="message" id="field-object" rows="3"
        class="form-control">Lorem ipsum dolor sit amet.</textarea></div>
    <div class="mb-5"><input type="submit" value="Envoyer" class="btn btn-outline-warning bold"></div>
</form>
