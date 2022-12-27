<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul?></title>	
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="/assets/vendor/ckeditor/ckeditor.js"></script>
</head>
    <body>
        <div class="container">
            <?php echo form_open_multipart('Admin/Dashboard/addevent');?>
                <div class="title">
                    <label for="judul">Judul Event</label><br>
                    <input type="text" name="judul" id="judul">
                </div>
                <div class="img-event">
                    <label for="img">Image</label><br>
                    <input type="file" name="gambar" id="gambar" value="Upload">
                </div>
                <div class="tanggal">
                    <label for="tanggal">Tanggal Event</label><br>
                    <input type="date" name="tanggal" id="tanggal">
                </div>
                <div class="tag">
                    <label for="tag">Tag Event</label><br>
                    <input type="text" name="tag" id="tag">
                </div>
                <div class="content">
                    <textarea name="isi_event" id="isi_event" ></textarea>
                    <script>
                        CKEDITOR.replace( 'isi_event' );
                    </script>
                </div>
                <div class="button">
                    <button>Simpan</button>
                </div>
            </form>
        </div>
    </body>
</html>