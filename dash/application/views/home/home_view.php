
<div class="row">
    <div class="col-xs-6">
        <form id="login_form" class="form-horizontal" action="<?=site_url('api/login')?>">
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Email</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" name="login" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" value="login" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
        <a href="<?=site_url('home/register')?>">Register</a>
        
    </div>
</div>

<script type="text/javascript">
$(function() {
    $("#login_form").submit(function(evt) {
        evt.preventDefault();
        var url = $(this).attr('action');
        var postData = $(this).serialize();
        
        $.post(url, postData, function(o) {
            if (o.result == 1) {
                window.location.href = '<?=site_url('dashboard')?>';
                
            } else {
                alert ('invalid login');
            }
        }, 'json');
    });
});
</script>