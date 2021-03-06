<?
$pages->home->uri = '';
$pages->home->text = 'New';
$pages->buzzing->uri = 'buzzing';
$pages->buzzing->text = 'Buzzing';
$pages->loved->uri = 'loved';
$pages->loved->text = 'Loved';
$pages->designers->uri = 'designers';
$pages->designers->text = 'Designers';
$pages->tags->uri = 'tags';
$pages->tags->text = 'Tags';
$pages->designers->uri = 'designers';
$pages->designers->text = 'Designers';
if($this->session->userdata('sid')){
  $pages->upload->uri = 'upload';
  $pages->upload->text = 'Upload';
  $pages->upload->class = 'upload';
}


?>

<div id="topNavigation" class="blackMenu">
  <ul class="h_navigation">
    <? foreach($pages as $page): ?>
    <? ($page->uri != '') ? $pattern = '/'.substr($page->uri,strpos($page->uri,'/')).'/i' : $pattern = '/'.$page->text.'/i'?>
    <? if($page->uri == uri_string() || @preg_match($pattern,uri_string())): ?>
    <li class="active <?=(isset($page->class) ? $page->class : '')?>">
      <a href="<?=site_url().$page->uri?>"><?=(isset($page->class) ? '<span>&nbsp;</span>' : '')?><?=$page->text?></a>
    </li>
    <? else: ?>
    <li<?= (isset($page->class) ? ' class="'.$page->class.'"' : '')?>>
      <a href="<?=site_url().$page->uri?>"><?=(isset($page->class) ? '<span>&nbsp;</span>' : '')?><?=$page->text?></a>
    </li>
    <? endif; ?>
    <? endforeach; ?>
  </ul>
  <?= form_open(site_url('/dosearch')) ?>  
    <input name="search" type="text" class="" id="search" placeholder="Pesquisar" />
  <?= form_close(); ?>    
</div>
<div id="main">
