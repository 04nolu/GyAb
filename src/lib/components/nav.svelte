<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

<style>
    $nav-background-color: rgb(5, 5, 122);

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}

nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
  min-height: 8vh;
  background-color: $nav-background-color;
  font-family: "Lato", sans-serif;
}

.logo {
  color: white;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-size: 20px;
  font-weight: bold;
}

.nav-links {
  display: flex;
  justify-content: space-around;
  width: 30%;

  li {
    list-style: none;
  }

  a {
    color: white;
    text-decoration: none;
    letter-spacing: 3px;
    font-weight: bold;
    font-size: 14px;
  }
}

.burger {
  display: none;
  cursor: pointer;

  div {
    width: 25px;
    height: 3px;
    border-radius: 5px;
    background-color: white;
    margin: 5px;
    transition: 0.5s ease-in-out;
  }
}

@media screen and (max-width: 1024px) {
  .nav-links {
    width: 60%;
  }
}

@media screen and (max-width: 768px) {
  body {
    overflow-x: hidden;
  }

  .nav-links {
    position: absolute;
    right: 0px;
    height: 92vh;
    top: 8vh;
    background-color: $nav-background-color;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 50%;
    transform: translateX(100%);
    transition: transform 0.5s ease-in-out;

    li {
      opacity: 0;
    }
  }

  .burger {
    display: block;
  }
}

.nav-active {
  transform: translateX(0%);
}

@keyframes navLinkFade {
  from {
    opacity: 0;
    transform: translateX(50px);
  }

  to {
    opacity: 1;
    transform: translateX(0px);
  }
}


.toggleBurger .line1 {
  transform: rotate(-45deg) translate(-5px, 6px);
}

.toggleBurger .line2 {
  opacity: 0;
}

.toggleBurger .line3 {
  transform: rotate(45deg) translate(-5px, -6px);
}





img {
  float: center;
  width: 500px;
  height: 500px;
  object-fit: cover;
}
</style>

  <title>Gymnasiearbete - Ludvig Noriander</title>
</head>

<body>
  <nav>
    <div class="logo">
      <label>Ludvig GyAb</label>
    </div>
    <ul class="nav-links">
      <li><a href="#">Hem</a></li>
      <li><a href="#">Om</a></li>
      <li><a href="pages/gymnasiearbete.html">Gymnasiearbete</a></li>
      <li><a href="#">Projekt</a></li>
    </ul>

    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <h1>Ludvig Noriander</h1>
  <p>Lite om mig</p>
  <img src="img/me.jpg" alt="Jag med två hundar" />
</body>

<script>
    const navSlide = () => {
  const burger = document.querySelector(".burger")
  const nav = document.querySelector(".nav-links")
  const navLinks = document.querySelectorAll(".nav-links li")

  burger.addEventListener("click", () => {
    //Toggle Nav
    nav.classList.toggle("nav-active")
    //Animate Links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = ``
      }
      else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 10 + 0.2}s`
      }
    })
    //Burger Animation
    burger.classList.toggle("toggleBurger")
  })
}

navSlide()
</script>

</html>