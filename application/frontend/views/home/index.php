<div class="g75">
  <ul class="tribbles" style="overflow: hidden;">
	<? foreach($tribbles as $tribble): ?>
    <li class="space"> 
      <div class="box">     
        <div class="tribble-img">
          <a href="<?=site_url("/view/".$tribble->id)?>" class="tribble-hover">
            <span class="title"><?=$tribble->title?></span>
            <span class="desc"><?=$tribble->text?></span>
            <em><?=strftime('%B %d, %Y',mysql_to_unix($tribble->ts));?></em>              
          </a>
          <img src="<?=getThumb($tribble->image)?>"  alt="<?=$tribble->title?>" />
        </div>
        <div class="tribble-tools">
          <p class="ico"><a href="" class="comments"><?=$tribble->replies?></a>Comments</p>
          <p class="ico"><a href="" class="likes"><?=$tribble->likes?></a>likes</p>  
          <p class="ico"><a href="" class="rebound"><?=$tribble->likes?></a>likes</p>     
        </div>        
      </div>
      <div class="tribble-user-info"><a href="/"><img name="avatar" src="" width="18" height="18" alt=""/><?=$tribble->username?></a></div>  
    </li>  
  <? endforeach; ?>
  </ul>
  <hr />
  <?=$paging?>  
</div>
 
