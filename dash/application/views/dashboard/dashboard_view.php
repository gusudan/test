<div class="row">
    <div id="dashboard-side" class="col-lg-4">
        <form id="create_todo" method="post" action="<?= site_url() ?>api/create_todo">
            <input type="text" name="content" placeholder="Create new to do item">
            <input type="submit" name="Create">
        </form>
        <div id="list_todo"></div>
    </div>
    <div id="dashboard-main" class="col-lg-offset-1 col-lg-7">
        <form id="create_note" method="post" action="<?= site_url() ?>api/create_todo">
            <input type="text" name="title" placeholder="Note title">
            <textarea  name="content">
            </textarea>

            <input type="submit" name="Create">
        </form>
    </div>
</div>