<?php include 'header.php';?>
<main>
      <div class="bg-dark text-white hero">
        <div class="transbox">
          <div class="container text-center header">
            <p class="brown-coffee">Coffee</p>
            <h1>Coffee Shop</h1>
          </div>
        </div>
      </div>
      <section id="aboutCoffee">
        <div class="p-5 row aboutCoffeeFlex">
          <div class="col-sm-12 col-md-8">
            <h2>Coffee</h2>
            <h3>Discover the Rich World of Coffee</h3>
            <p>
              Dive into the vibrant and aromatic world of coffee, where each cup
              tells a story of its journey from bean to brew. Our carefully
              selected coffee beans are sourced from the finest regions around
              the globe, ensuring every sip delivers a burst of rich,
              full-bodied flavor. Whether you prefer the bold intensity of a
              dark roast or the delicate nuances of a light blend, our diverse
              selection caters to every palate, promising an unparalleled coffee
              experience.
            </p>
            <h3>Elevate Your Morning Ritual</h3>
            <p>
              Transform your daily routine with a cup of our premium coffee.
              Meticulously roasted to perfection, our beans provide a consistent
              and exceptional taste that awakens the senses and invigorates the
              spirit. From the first enticing aroma to the last satisfying drop,
              our coffee is crafted to be the highlight of your day. Embrace the
              moment, savor the flavor, and make each morning extraordinary with
              our exquisite coffee selections.
            </p>
            <h3>Commitment to Quality and Sustainability</h3>
            <p>
              At the heart of our coffee lies a commitment to quality and
              sustainability. We partner with ethical farmers who employ
              eco-friendly practices, ensuring that every bean is grown with
              care and respect for the environment. Our roasting process
              emphasizes precision and craftsmanship, preserving the unique
              characteristics of each bean. By choosing our coffee, you're not
              only indulging in superior taste but also supporting a more
              sustainable and equitable coffee industry.
            </p>
          </div>
          <div class="col-4 aboutCoffeeImg">
            <img src="./images/aboutCoffeeHorisontal.jpg" alt="" />
          </div>
        </div>
      </section>
      <div class="changeColorWhite"></div>
      <section id="aboutUs">
        <div class="p-5 row aboutUsFlex">
          <div class="col-md-6 col-sm-12 aboutUsImg">
            <img src="./images/aboutUs.jpg" alt="" />
          </div>
          <div class="col-md-6 col-sm-12">
            <h2 class="brown-coffee">About</h2>
            <h3>Our Story</h3>
            <p>
              Founded in 2016, Coffee Shop was born from a passion for
              exceptional coffee and a love for community. Our journey began
              with a simple idea: to create a space where coffee enthusiasts
              could gather, share stories, and enjoy the finest brews. Over the
              years, we've grown into a beloved local spot, known for our
              commitment to quality, sustainability, and friendly service. Each
              cup we serve is a testament to our dedication, crafted with care
              from the best beans sourced from ethical and sustainable farms
              around the globe.
            </p>
            <h3>Our Mission and Values</h3>
            <p>
              At Coffee Shop, our mission is to deliver an unforgettable coffee
              experience while fostering a sense of community and connection. We
              believe in the power of coffee to bring people together and create
              lasting memories. Our values are rooted in quality,
              sustainability, and community. We prioritize sourcing beans that
              are not only of the highest quality but also ethically and
              sustainably grown. We are committed to reducing our environmental
              footprint and g/iving back to the community that has supported us
              from the beginning. Come visit us and become a part of the Coffee
              Shop family – where every cup tells a story.
            </p>
            <a href="./aboutUs.php" class="btn btn-dark coffeeButton">
              Learn More
            </a>
          </div>
        </div>
      </section>
      <section id="topMenu">
        <div class="container cards d-flex justify-content-around pt-5 menu">
          <div class="card" style="width: 18rem">
            <img src="./images/espresso.jpg" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Espresso</h5>
              <p class="card-text">
                Espresso is the heart and soul of coffee culture, delivering a
                concentrated and intense flavor experience in every sip.
              </p>
              <a href="./menu.php" class="btn btn-dark coffeeButton"
                >Learn More</a
              >
            </div>
          </div>
          <div class="card" style="width: 18rem">
            <img src="./images/latte.jpg" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Latte</h5>
              <p class="card-text">
                A latte is a delightful fusion of robust espresso and creamy
                steamed milk, creating a smooth and comforting beverage that is
                perfect for any time of day.
              </p>
              <a href="./menu.php" class="btn btn-dark coffeeButton"
                >Learn More</a
              >
            </div>
          </div>
          <div class="card" style="width: 18rem">
            <img src="./images/cappuccino.jpg" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Cappuccino</h5>
              <p class="card-text">
                Cappuccino is a timeless coffee classic, known for its
                harmonious blend of bold espresso, steamed milk, and a rich,
                frothy top.
              </p>
              <a href="./menu.php" class="btn btn-dark coffeeButton"
                >Learn More</a
              >
            </div>
          </div>
        </div>
      </section>
      <section id="carousel">
        <div class="container">
          <div
            id="demo"
            class="carousel slide m-auto mt-5 mb-5"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="0"
                class="active"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="1"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="2"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="3"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="4"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="5"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/gallery1.jpg" alt="" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="./images/gallery2.jpg" alt="" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="./images/gallery3.jpg" alt="" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="./images/gallery4.jpg" alt="" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="./images/gallery5.jpg" alt="" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="./images/gallery6.jpg" alt="" class="d-block w-100" />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </section>
      <div class="changeColor"></div>
      <section id="contacts">
        <div class="container contacts">
          <div class="rowFlex">
            <div class="box1">
              <h3 class="brown-coffee">Write us</h3>
              <h2 style="color: white">Contacts</h2>
              <div class="phoneInfo">
                <i class="fa-solid fa-phone" style="color: #c7a17a"></i>
                <?php include 'data.php';
                echo <<< EOD
                <a href="tel:+380567891234">$phone</a>
                EOD;
                ?>
              </div>
              <div class="emailInfo">
                <i class="fa-solid fa-envelope" style="color: #c7a17a"></i>
                <?php include 'data.php';
                echo <<< EOD
                <a href="mailto:coffeeshop@mymail.com">$mail</a>
                EOD;
                ?>
              </div>
              <div class="container mt-5" id="contacts">
                <form action="./index.php" class="was-validated">
                  <div class="mb-3 mt-3">
                    <input
                      type="text"
                      class="form-control"
                      id="uname"
                      placeholder="Full Name*"
                      name="uname"
                      required
                    />
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">
                      Please fill out this field.
                    </div>
                  </div>
                  <div class="mb-3 mt-3">
                    <input
                      type="tel"
                      class="form-control"
                      id="uname"
                      placeholder="Phone number*"
                      name="uname"
                      required
                    />
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">
                      Please fill out this field.
                    </div>
                  </div>
                  <div class="mb-3 mt-3">
                    <input
                      type="email"
                      class="form-control"
                      id="uname"
                      placeholder="E-mail"
                      name="uname"
                      required
                    />
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">
                      Please fill out this field.
                    </div>
                  </div>
                  <button
                    type="submit"
                    class="btn btn-light m-auto my-5 d-block coffeeButton submitButton"
                  >
                    Send
                  </button>
                </form>
              </div>
            </div>

            <div class="box2" style="width: 50%">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192.38290630276805!2d36.23846568167213!3d50.011494410395386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0d88d1109d9%3A0x665db5a63a08b288!2z0KHRg9C80YHQutC-0Lkg0YDRi9C90L7Qug!5e1!3m2!1sru!2sua!4v1717441592230!5m2!1sru!2sua"
                width="100%"
                height="600px"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php include 'footer.php';?>