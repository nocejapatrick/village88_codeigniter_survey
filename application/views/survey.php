<div class="container">
    <form action="/surveys/process_form" method="POST">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" class="form-control <?= ($this->session->flashdata('name_error')) ? 'error' :'' ?>" value="" placeholder="<?= $this->session->flashdata('name_error') ?>">
        </div>
        <div class="form-group">
            <label for="dojo_location">Dojo Location:</label>
            <select name="dojo_location" id="dojo_location">
                <option value="Mountain View">Mountain View</option>
                <option value="Beach View">Beach View</option>
                <option value="Sky View">Sky View</option>
            </select>
        </div>
        <div class="form-group">
            <label for="favorite_language">Favorite Language:</label>
            <select name="favorite_language" id="favorite_language">
                <option value="Javascript">Javascript</option>
                <option value="Phyton">Phyton</option>
                <option value="C#">C#</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment">Comment (optional)</label>
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
        </div>
        <!-- <div class="form-group">
            <label for=""></label>
            <p class="error">Kindly check require inputs.</p>
        </div> -->
        <div class="form-group">
            <label></label>
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>
        
    </form>
</div>
