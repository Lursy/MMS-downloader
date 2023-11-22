<?php
    $conn = novaConexao();
    $sql = "SELECT * FROM video";
    $result = $conn->query($sql);
?>

<div class="container container-edit">
    <?php while($all_data = $result->fetch_assoc()):?>
        <form method="POST">
            <div class="form-group row">
                <label for="new_title" class="id-edit col-form-label" id="id"><?=$all_data["id"]?></label>
                <input value="<?=$all_data["id"]?>" type="hidden" name="id">
                <div class="col-sm-8 title-edit">
                    <input type="text" name="new_title" id="title" class="mt-1 mb-2 form-control" maxlength="50" value="<?=$all_data["title"]?>" required>
                </div>
                <input type="submit" value="salvar" class="btn btn-outline-primary btn-edit">
            </div>
        </form>
    <?php endwhile;?>
</div>