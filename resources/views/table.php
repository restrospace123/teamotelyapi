<?php $rows = explode(PHP_EOL, $data); ?>

<?php if(!empty($rows)){ ?>
<table class="table">
  <!-- <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead> -->
  <tbody>

<?php foreach($rows as $row){ ?>

<?php $row = explode(',', $row); ?>

    <tr>
    <?php foreach($row as $element){ ?>
      <th scope="row"><?= $element ?></th>
    <?php } ?>
    </tr>

<?php } ?>

  </tbody>
</table>
<?php } ?>