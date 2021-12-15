  <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Best Seller</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
            <?php foreach ($dataBarang as $barang) : ?>
          </div>
          <div class="col-md-4 ">
            <div class="product-item">
              <a href="#"><img src="./assets/images/<?=$barang['barang_img']?>" alt=""></a>
              <div class="down-content">
                <a href="#"><h4><?=$barang['barang_title']?></h4></a>
                <h6>Rp. <?=$barang['barang_harga']?></h6>
                <p><?=$barang['barang_description']?></p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Kahf Care</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Sedikit Pengenalan Produk Kahf</h4>
              <p>Kahf merupakan brand personal care pria dengan terobosan baru yang menghadirkan rangkaian produk halal, berkualitas dan terinspirasi dari alam untuk merawat kulit dan kebersihan diri.
              Dan akhirnya ada juga rangkaian produk pria Brand Lokal yanag diperuntukkan untuk kaum pria. Kahf hadir dengan formula yang ringan berteknologi HydroBalanceTM dengan empat filosofinya, yaitu:</p>
              <ul class="featured-list">
                <li><a href="#">Purely Cleanse : membersihkan kulit secara menyeluruh hingga ke pori-pori</a></li>
                <li><a href="#">Balancely Hydrated : menjaga keseimbangan kelembaban alami kulit</a></li>
                <li><a href="#">Nourish and Care : merawat serta menutrisi tubuh</a></li>
                <li><a href="#">Exquisite Natural Scent : mengandung aroma yang terinspirasi dari alami</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="./assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Kahf</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>