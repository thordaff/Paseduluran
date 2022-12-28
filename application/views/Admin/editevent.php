<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul?></title>	
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="/assets/vendor/ckeditor/ckeditor.js"></script>
</head>
    <body>
    <?php foreach($show as $s) :?>
        <div class="container">
            <form action="<?php echo base_url('Admin/Dashboard/updateEvent/'.$s['id'])?>" method="post">
                <div class="id">
                    <input type="hidden" name="id" id="id">
                </div>
                <div class="title">
                    <label for="judul">Judul Event</label><br>
                    <input type="text" name="judul" id="judul" value="<?php echo $s['judul']?>">
                </div>
                <div class="button">
                    <button>Simpan</button>
                </div>
            </form>
        </div>
    <?php endforeach; ?>
    </body>
</html>