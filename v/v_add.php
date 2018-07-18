
<main>
    <form method="post">
        <div>
            <div>Article Name</div>
            <input type="text" name="name" value="<?=$name; ?>">
        </div>
        <div>
            <div>Article</div>
            <textarea name="text" rows="8" cols="80"><?=$text; ?></textarea>
        </div>
        <button>Set Article</button>
    </form>
    <h4><?=$error?></h4>
</main>

