<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($USER->IsAuthorized()):?>
<form action="" name="form-comments" method="POST">
      <textarea name="message" placeholder="Enter Message" required></textarea>
      <input type="text" name="subject" placeholder="Enter Subject" required>

      <button type="submit" name="send">SEND</button>
</form>

<div class="comments">
      <ul class="comment__list">
            <?foreach($arResult as $item):?>
            <li class="comment__item">
                  <h4 class="comment__login"><?=$item['NAME']?></h4>
                  <p class="comment__subject"><?=$item['PREVIEW_TEXT']?></p>
                  <p class="comment__message"><?=$item['DETAIL_TEXT']?></p>
            </li>
            <?endforeach?>
      </ul>
</div>

<?endif?>