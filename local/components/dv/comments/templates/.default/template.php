<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($USER->IsAuthorized()):?>
<form action="" name="form-comments" method="POST">
      <textarea name="message" placeholder="Enter Message" required></textarea>
      <input type="text" name="subject" placeholder="Enter Subject" required>

      <button type="submit" name="send">SEND</button>
</form>
<?endif?>