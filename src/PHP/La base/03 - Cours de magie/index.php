<?php
    require_once("action/indexAction.php");

    $data = execute();

    $data["pageTitle"] = "Accueil";

    require_once("partials/header.php");
?>
<img src="img/theater.jpg" alt="Theater magic">
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
</p>
<?php
    require_once("partials/footer.php");