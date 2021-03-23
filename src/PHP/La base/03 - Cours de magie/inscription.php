<?php
    require_once("action/inscriptionAction.php");

    $data = execute();

    $data["pageTitle"] = "Inscription";

    require_once("partials/header.php");
?>
<div class="register-section">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati, accusantium quos numquam beatae sapiente. Facere amet accusamus id quos dolorum inventore esse excepturi autem ut ullam! Perferendis, libero laborum.
    </p>
    <?php
        if ($data["showSuccess"]) {
            ?>
            <div onclick="this.remove()" style="position:fixed;top:20vh;padding:20px;color:green;background-color:#5f5">
                Vous êtes maintenant inscrit!
            </div>
            <?php
        }
    ?>
    <form action="" method="post">
        <div>
            <input type="text" name="name" placeholder="Nom" required>
        </div>
        <div>
            <select name="course" required>
                <option>L'art des cartes</option>
                <option>La triche</option>
                <option>L'hypnose</option>
            </select>
        </div>
        <div>
            <textarea name="message" required cols="30" rows="10" placeholder="Informations complémentaires"></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</div>
<?php
    require_once("partials/footer.php");
