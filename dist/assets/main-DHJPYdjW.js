let r=document.querySelector(".site-header");window.addEventListener("scroll",function(){window.scrollY>0?r.classList.add("scrolled"):r.classList.remove("scrolled")});const e=document.querySelector("#slider-feature");if(e){const s=new Splide(e,{rewind:!0,autoplay:!0,interval:5e3,pauseOnHover:!0,arrows:!1,pagination:!0,mediaQuery:"min",perPage:1,breakpoints:{768:{}}}).mount();e.__instance=s}
