<li>
  <div class="bookmark">☆</div><!-- ★ -->
  <div>
    <h2 class="eg_name"><a href="<?= $company->url() ?>"><?= $company->title() ?></a></h2>
    <?php $interactive_items = [
      $company->verband(),
      $company->kategorie(),
      $company->banche()
    ]; ?>
    <?php snippet("interactive", array('items' => $interactive_items)) ?>
    <?php $meta_items = [
      $company->city()
    ]; ?>
    <?php snippet("meta", array('items' => $meta_items)) ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem iusto explicabo dolor dicta. Quisquam repellat sint sunt laudantium quasi cumque fuga omnis, ducimus nesciunt debitis. Ad est, ullam porro dolorum!</p>
  </div>
</li>
