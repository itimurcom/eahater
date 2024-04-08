<?
if ($_USER->is_logged()) {
	cms_redirect_page("/");
    }
$_CONTENT['content'] =
    TAB."<div class='site-block boxed color4'>".
        TAB."<div class='buttons_div'>".
            "<center class='noipad'><h1>Admin</h1></center>".
            get_login_event().
        TAB."</div>".
    TAB."</div>".
    "";
?>