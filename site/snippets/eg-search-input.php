<div class="input-group flex">
  <input type="text" class="eg-search-input form-control flex-9" placeholder="Energiegenossenschaft in Mainz">
  <?php $results = 56; ?>
  <?php $btn_text = "" ?>
  <?php if ($results) : ?>
    <?php $btn_text += (String)$results + " "; ?>
  <?php endif; ?>
  <?php $btn_text += "Ergebnisse Anzeigen"; ?>
  <a class="eg_search_btn btn btn-primary flex-3" href="/"><?= $btn_text ?></a>
</div>
