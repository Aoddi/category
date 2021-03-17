<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($USER->IsAuthorized()):?>
<form action="" name="form-comments" method="POST">
      <input type="hidden" name="user-login" value="<?= $USER->GetLogin() ?>">
      <input type="hidden" name="user-email" value="<?= $USER->GetEmail() ?>">
      <textarea name="message" placeholder="Enter Message"></textarea>
      <input type="text" name="subject" placeholder="Enter Subject">

      <button type="submit">SEND</button>
</form>
<?endif?>