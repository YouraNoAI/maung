<section id="informasiSampah">
  <div class="container-about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-un" style="margin-top: 90px;">BERITA DAN INFORMASI TENTANG SAMPAH</h3>
          <div class="title-un-icon"><i class="fas fa-newspaper"></i></div>
          <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
          <ul class="blog-posts-g">
            <?php foreach ($postingan as $row) : ?>
              <li>
                <div class="post-img">
                  <a href="<?= $row['sumber']; ?>/" target="_blank">
                    <img style="max-width: 100%; max-height: 50%;" src="img/berita/<?= $row['gambar'] ?>" alt="<?= $row['judul']; ?>">
                  </a>
                </div>
                <div class="post-content">
                  <h5> <a href="<?= $row['sumber']; ?>/" target="_blank"><?= $row['judul']; ?></a></h5>
                  <!-- <div class="post-info"><span> 4 October 2015</span>/<span><a href="#"> By John Deo</a></span></div> -->
                  <p>
                    <?php
                    $a = $row['isi'];
                    // echo $a;
                    if (strlen($a) > 250) {
                      echo substr($a, 0, 250), " (...)";
                    } else {
                      echo $a;
                    }
                    ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>