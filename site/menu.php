<?php include 'header.php';?>
<main>
      <div class="container mt-5" id="Menu">
        <p class="brown-coffee text-center">Our drinks</p>
        <h2 class="text-center">Menu</h2>
        <div id="cards" class="row mb-5">
          <div class="col-sm-12 col-md-6 col-lg-4 col-12">
            <div class="item_box card text-center my-5 p-3">
              <img src="./images/espresso.jpg" class="card-img-top" alt="..." />
              <h5 class="item_title pt-4">Espresso</h5>
              <div class="price">
                <img src="./images/dollar.svg" width="20px" alt="" />
                <p class="money">$2</p>
              </div>
              <p class="desc">
                Espresso is the purest expression of coffee, delivering a
                powerful punch of rich, complex flavors in a single,
                concentrated shot.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 col-12">
            <div class="item_box card text-center my-5 p-3">
              <img src="./images/latte.jpg" class="card-img-top" alt="..." />
              <h5 class="item_title pt-4">Latte</h5>
              <div class="price">
                <img src="./images/dollar.svg" width="20px" alt="" />
                <p class="money">$5.5</p>
              </div>
              <p class="desc">
                A latte is the perfect blend of rich espresso and creamy steamed
                milk, offering a smooth and luxurious coffee experience.
              </p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-4 col-12">
            <div class="item_box card text-center my-5 p-3">
              <img
                src="./images/cappuccino.jpg"
                class="card-img-top"
                alt="..."
              />
              <h5 class="item_title pt-4">Cappuccino</h5>
              <div class="price">
                <img src="./images/dollar.svg" width="20px" alt="" />
                <p class="money">$5</p>
              </div>
              <p class="desc">
                A cappuccino is a perfect balance of bold espresso, steamed
                milk, and airy foam, creating a delightful and invigorating
                coffee experience.
              </p>
            </div>
          </div>
        </div>
      </div>
      <button
        onclick="loadMenu(menu)"
        type="button"
        class="btn btn-dark m-auto my-5 d-block coffeeButton"
        id="loadMenuBtn"
      >
        Load more
      </button>
    </main>
<?php include 'footer.php';?>