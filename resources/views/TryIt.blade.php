<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <div class="container">
      <br><br>
        <h3>Popover Example</h3>
        <a href="#" data-toggle="popover" title="Popover Header" data-content="Talitha Firyal Ghina Nuha dan Dwi Indah Retnanik">Toggle popover</a>
      </div>

      <script>
      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
      });
      </script>    <br>
<div class="container">
  <h3>Popover Example</h3>
  <p>By default, the popover will appear on the right side of the element.</p>
  <p>Use the data-placement attribute to set the position of the popover on top, bottom, left or the right side of the element.</p>
  <p>Note: The placement attributes do not work if it is not enough room for them. For example, try to remove these paragraphs and click on the "Top" popover to understand how it works.</p>
  <a href="#" title="Example 1" data-toggle="popover" data-placement="top" data-content="FTEIC">Top</a>
  <a href="#" title="Example 2" data-toggle="popover" data-placement="bottom" data-content="Sistem Informasi">Bottom</a>
  <a href="#" title="Example 3" data-toggle="popover" data-placement="left" data-content="Pemrograman Web">Left</a>
  <a href="#" title="Example 4" data-toggle="popover" data-placement="right" data-content="Kelas C">Right</a><br><br>

  <a href="#" title="Whatsapp" data-toggle="popover" data-content="Ini nomor Whatsappku">Whatsapp</a><br>
  <a href="#" title="Instagram" data-toggle="popover" data-trigger="hover" data-content="Ini username Instagramku">Instagram</a><br>
  <a href="#" title="Tiktok" data-toggle="popover" data-trigger="focus" data-content="Ini username Tiktokku">Tiktok</a>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>

</body>
</html>
