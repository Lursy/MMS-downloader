<?php
    $conn = novaConexao();
    $sql = "SELECT * FROM video";
    $result = $conn->query($sql);
?>

<div class="container container-edit">
    <?php while($all_data = $result->fetch_assoc()):?>
        <form method="POST">
            <div class="form-group row">
                <label class="id-edit col-form-label" id="id"><?=$all_data["id"]?></label>
                <input value="<?=$all_data["id"]?>" type="hidden" name="id">
                <div class="col-sm-8 title-edit d-flex justify-content-center align-items-center">
                    <p id="title" class="mt-1 mb-2"><?=htmlspecialchars($all_data["title"], ENT_QUOTES, 'UTF-8');?></p>
                </div>
                <input type="submit" value="remover" name="remove" class="btn btn-outline-danger btn-edit">
            </div>
        </form>
    <?php endwhile;?>
</div>