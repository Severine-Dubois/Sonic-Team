const loader = document.querySelector(".wrapper-loader");
console.log(loader);

const loadingPage = {
  init: function() {
    loadingPage.addLoadEvent();
    loadingPage.addMusicEvent();
  },

  // Page de chargement
    addLoadEvent: function(){
    window.addEventListener('load', () =>
    {
      if(sessionStorage.getItem('firstLoading') === null) {
        setTimeout(() => {
          loader.classList.add('fondu-out');
        }, 6500)

        setTimeout(() => {
          loader.style.display = "none";
        }, 7000)
      } else {
        loader.style.display = "none";
        loader.style.opacity = 0;
      }

      sessionStorage.setItem('firstLoading', 'done');
    });
  },

  // Son au lancement de la page

    addMusicEvent: function(){
      const sonic = document.querySelector(".wrapper-loader > img")
      console.log(sonic);

      sonic.addEventListener('click', () =>
      {
      if (sessionStorage.getItem("hasCodeRunBefore") === null) {
        console.log("music")
          document.getElementById("my_audio").play();
          sessionStorage.setItem("hasCodeRunBefore", true);
        }
       }  
    )},

};

loadingPage.init();