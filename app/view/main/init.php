<div class="main">
    <h1><?php $name?></h1>
    <div class = "form">
        <form id="ajax-review" method="post" action="add-review">
            <fieldset>
                <label for="name" id="name_label">Имя</label>
                <input type="text" name="name" id="name" size="30" value="" class="text-input" />
                <label class="error" for="name" id="name_error">Поле не должно быть пустым</label>
                <br /><br /><br />
                <label for="review" id="review_label">Отзыв</label>
                <textarea name="review" id="review" rows="10" cols="45" class="text-input"></textarea>
                <label class="error" for="review" id="review_error">Поле не должно быть пустым</label>
                <br /><br /><br />
                <input type="submit" name="submit" class="button" id="submit_btn" value="Отправить" />
            </fieldset>
        </form>
    </div>
    <div class = "reviews">
        <?php foreach ($reviews as $review) {?>
            <div class="review_result">
                <div class = "name"><?php echo $review->name ?></div>
                <div class = "review"> <?php echo $review->review ?></div>
                <div class = "date"> <?php echo $review->date ?></div>
                <br/>
            </div>
        <?php } ?>
    </div>
</div>