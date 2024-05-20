<?php
$book_bg_img = get_field('book_background_image');
$book_title = get_field('book_title');
$book_text = get_field('book_text');
$book_btn = get_field('book_btn');
$book_btn_title = $book_btn['title'];
$book_btn_link = $book_btn['url'];
?>

<section id="book" class="book" style="background-image: url(<?php echo $book_bg_img; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12 book__inner">
                <?php if ($book_title): ?>
                    <h3 class="book__title"><?php echo $book_title; ?></h3>
                <?php endif; ?>

                <?php if ($book_text): ?>
                    <p class="book__description"><?php echo $book_text; ?></p>
                <?php endif; ?>

                <?php if ($book_btn_title): ?>
                    <a href="<?php echo $book_btn_link; ?>" class="book__btn btn"><?php echo $book_btn_title; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
