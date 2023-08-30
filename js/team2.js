(function () {
    var words = ["Lorem ipsum dolor sit, amet consectetur adipisicing elit."," Cum dignissimosgi repellat nesciunt sequi illum aliquam.","UI/Unix,Developer,Youtube,Happy Person" ],
    i = 0;
    setInterval(function(){ $('#words').fadeOut(function(){
        $(this).html(words[(i = (i + 1) % words.length)]).fadeIn();
      }); }, 2500)
  })();




  const mainMenu = document.querySelector('.mainMenu');
  const closeMenu = document.querySelector('.closeMenu');
  const openMenu = document.querySelector('.openMenu');
  const menu_items = document.querySelectorAll('navbar .mainMenu li a');
  
  
  
  
  openMenu.addEventListener('click',show);
  closeMenu.addEventListener('click',close);
  
  // close menu when you click on a menu item 
  menu_items.forEach(item => {
      item.addEventListener('click',function(){
          close();
      })
  })
  
  function show(){
      mainMenu.style.display = 'flex';
      mainMenu.style.top = '0';
  }
  function close(){
      mainMenu.style.top = '-100%';
  }
  
  




  var swiper = new Swiper(".arrivals-slider", {
    loop: true,
    grabCursor : true,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      550: {
        slidesPerView: 2,
      },
      850: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });





  
  var swiper = new Swiper(".blogs-slider", {
    loop: true,
    grabCursor : true,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      650: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });