    <footer>
      <div class="globalInfo pt-5">
        <div class="openTime">
          <i
            class="fa-solid fa-clock"
            style="color: #c7a17a;"
          ></i>
          <div class="openTimeText">
            <h2>Open hours</h2>
            <?php include 'data.php';
          echo <<< EOD
          <p>$time_table</p>
          EOD;
          ?>
          </div>
        </div>
        <div class="location">
          <i
            class="fa-solid fa-location-dot"
            style="color: #c7a17a;"
          ></i>
          <div class="locationText">
            <h2>Location</h2>
            <?php include 'data.php';
          echo <<< EOD
          <p>$location</p>
          EOD;
          ?>
            
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="footerNavigation container">
          <a href="./index.html"
            ><img src="./images/logo.svg" width="150px" alt=""
          /></a>
          <ul class="socialMedia">
            <li>
              <a href="https://www.instagram.com/" target="_blank"
                ><i
                  class="fa-brands fa-square-instagram fa-2xl"
                  style="color: #c7a17a"
                ></i
              ></a>
            </li>
            <li>
              <a href="https://github.com/Vania2007" target="_blank"
                ><i
                  class="fa-brands fa-square-github fa-2xl"
                  style="color: #c7a17a"
                ></i
              ></a>
            </li>
            <li>
              <a href="https://uk-ua.facebook.com/" target="_blank"
                ><i
                  class="fa-brands fa-square-facebook fa-2xl"
                  style="color: #c7a17a"
                ></i
              ></a>
            </li>
          </ul>
        </div>
        <hr class="cotainer" style="color: aliceblue; margin: 0 100px" />
        <div class="pt-5 px-5 pb-3 text-white text-center copyright">
          <?php include 'data.php';
          echo <<< EOD
          <p>&copy; Created by <strong>$author</strong></p>
          EOD;
          ?>
          <p>All rights Reserved</p>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>
    <script>
        function loadMenu(menu) {
            document.getElementById("loadMenuBtn").remove();
            let cards = "";
            for (let i = 0; i < menu.length; i++) {
            cards += `<div class="col-sm-12 col-md-6 col-lg-4 col-12">
            <div class="item_box card text-center my-5 p-3">
                <img src="${menu[i].image}" class="card-img-top"/>
                <h5 class="item_title pt-4">${menu[i].name}</h5>
                <div class="price">
                <img src="./images/dollar.svg" width="20px" alt="" />
                <p class="money">$${menu[i].price}</p>
                </div>
                <p class="card-text">${menu[i].desc}</p>
                </div>
            </div>\n`;
            }
            let menuElement = document.getElementById("cards");
            menuElement.innerHTML = cards;
        }
    </script>
    </body>
</html>
