<p>This is the form</p>

<form method="post" action="">

    <?php foreach($items as $i => $text) : ?>

         <input type="text" name="items[<?= $i ?>]" value="<?= $text ?>" id="">

    <?php endforeach ; ?>


    <input type="text" name="items[<?= count($items) ?>]" value="" id="">
    <button>Add</button>
</form>