<?if(!empty($tags)):?>
<h3>Most common tags</h3>
<hr />
<ul class="tags">
  <?foreach($tags as $tag => $count):?>
    <li><a href="<?=site_url('/tag/'.$tag)?>"><?=$tag?> (<?=$count?>)</a></li>
  <?endforeach;?>
</ul>
<?endif;?>