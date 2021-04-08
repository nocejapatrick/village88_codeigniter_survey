<div class="container success">
    Thanks for submitting this form! You have submitted this form <?= $this->session->userdata('count_form'); ?> times now.
</div>
<div class="container results">
    <h2>Submitted Information</h2>
    <div>
        <label for="">Name:</label>
        <p><?= $this->session->userdata('form_data')["name"] ?></p>
    </div>
    <div>
        <label for="">Dojo Location:</label>
        <p><?= $this->session->userdata('form_data')["dojo_location"] ?></p>
    </div>
    <div>
        <label for="">Favorite Language:</label>
        <p><?= $this->session->userdata('form_data')["favorite_language"] ?></p>
    </div>
    <div>
        <label for="">Comment:</label>
        <p><?= $this->session->userdata('form_data')["comment"] ?></p>
    </div>
    <a href="<?= base_url(); ?>" style="display: block; margin-left:20px; margin-top:20px;">Go back</a>
</div>