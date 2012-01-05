<?
$pages->home->uri = '';
$pages->home->text = 'home';
$pages->buzzing->uri = 'tribble/buzzing';
$pages->buzzing->text = 'buzzing';
$pages->loved->uri = 'tribble/loved';
$pages->loved->text = 'loved';
if($this->session->userdata('uid')){
  $pages->upload->uri = 'tribble/upload';
  $pages->upload->text = 'upload';
}

?>

<div id="navContainer">
  <div id="topNavigation" class="blackMenu">
    <ul class="h_navigation">
      <? foreach($pages as $page): ?>
      <? if(current_url() == site_url()."/".$page->uri): ?>
      <li class="active"><a href="<?=site_url()."/".$page->uri?>">
        <?=$page->text?>
        </a></li>
      <? else: ?>
      <li><a href="<?=site_url()."/".$page->uri?>">
        <?=$page->text?>
        </a></li>
      <? endif; ?>
      <? endforeach; ?>
    </ul>
    <form id="search">
      <input name="searchInput" type="text" class="" id="searchInput" placeholder="Pesquisar" />
    </form>
    <div id="login">
      <ul >
        <li><a href="/">Sign In</a></li>
        <li><a href="/">Log In</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="main">