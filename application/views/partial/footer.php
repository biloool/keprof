<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#footer {
  background-color
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>



<div class="container">
  <div style="text-align:center">
    <h1 class="text-center">TENTANG KAMI</h1>
  </div>
  <div class="row">
    <div class="column">
      <img src="<?php echo base_url() ?>assets/img/logo.jpg" style="width:70%">
    </div>
    <div class="column">
      <h4>Panti Sosial Asuhan Anak</h4>
      <p>Kantor Pusat:</p>
      <p>Komplek Perumahan Graha Rancamanyar, Jl. Graha Puspa A1, Kec. Baleendah, Kab. Bandung, Jawa Barat </p>
      <p>Telepon : (022)85934057</p>
      <p>Email : shafiqanurrohman@gmail.com</p>
      <div>
        <h4>Program Kerja Kami</h4>
    </div>
    </div>
  </div>
</div>
<section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="https://www.facebook.com/psaashafiqa.nurrohman" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/pantiasuhan_shafiqa_nurrohman/?hl=id" class="icoInstagram" title="Instagram"><i class="fab fa-instagram"></i></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-sm-12 text-center">
        <p>Copyright &copy; Shafiqa Nurrohman</p>
        <div class="credits">
              <!--
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Hidayah
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
      </div>
    </div>

  </section>
  <a href="#" class="scrollup"><i class="fas fa-arrow-up"></i></a>
<!-- <div class="footer">
  <p class="text-center">Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
</div> -->
