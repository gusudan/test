
<div class="row">
    <div class="col-xs-6">

        <div id="register_form_error" class="alert alert-warning"><!-- Dynamic --></div>

        <form id="register_form" class="form-horizontal" action="<?= site_url('api/register') ?>">
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Login</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" name="login" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Email</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Conform Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" value="Register" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
        <a href="<?= site_url('/') ?>">Back</a>

    </div>
</div>

<script type="text/javascript">
    $(function() {

    $("#register_form_error").hide();
            $("#register_form").submit(function(evt) {
                
                evt.preventDefault();
                var url = $(this).attr('action');
                var postData = $(this).serialize();
                
                $.post(url, postData, function(o) {
                    if (o.result == 1) {
                            window.location.href = '<?= site_url('dashboard') ?>';
                        } else {
                        $("#register_form_error").show();
                                var output = '<ul>';
                                    for (var key in o.error) {
                                        var value = o.error[key];
                                        output += '<li>' + value + '</li>';
                                    }
                                output += '</ul>';
                                $("#register_form_error").html(output);
                            }
                        }, 'json');
            });
    });

</script>