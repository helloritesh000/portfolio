<section class="section scrollspy" style="margin-left:30px; width: 90%;">
    <form >
    <?php (isset($content)) ? var_dump( $content) : 'AAA'; ?>
        <div class="form-group">
            <input type="hidden" name="hdnId" value="<?php $content['id']; ?>" />
                <label for="txtDescription">Enter Description</label>
                <textarea class="form-control" cols="80" id="txtDescription" name="txtDescription">
                    <?php $content['content']; ?>
                </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>