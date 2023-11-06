/**
* License: https://bootstrapmade.com/license/
*/


  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)


  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });

      }, true);
    }

  });



  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Validasi
   */

  
  var whatsappLink = "";

  function buatLink() {
    var namaDepan = document.getElementById("namadepan").value;
    var namaBelakang = document.getElementById("namabelakang").value;
    var nomor = document.getElementById("nomor").value;
    var isiPesan = document.getElementById("pesan").value;
  
    var link = "https://wa.me/6281231345028";
    var perkenalan = "Saya%20" + namaDepan + "%20" + namaBelakang + "%20dengan%20nomor%20" + nomor;
  
    isiPesan = isiPesan.split(" ");
    isiPesan = isiPesan.join("%20");
    isiPesan = isiPesan.split("\n")
    isiPesan = isiPesan.join("%0A")
    link += ("&text=" + perkenalan + isiPesan);
  
    document.getElementById("validasimessage").innerHTML = "<a class='form-control form-control-md border-0 inputform text-success fw-bold mb-3' href='" + link + "' target='_blank'>" + "Click di sini" + "</a>";
  }
  
  function validasi() {
    let nomorWhatsApp = document.getElementById("nomor").value;
    let validasinomor = document.getElementById("validasinomor");
  
    if (nomorWhatsApp === "") {
      validasinomor.innerText = "*Nomor Whatsapp tidak boleh kosong";
      validasinomor.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else if (!nomorWhatsApp.startsWith("+628")) {
      validasinomor.innerText = "*Nomor Whatsapp harus dimulai dengan +628";
      validasinomor.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else if (nomorWhatsApp.length < 12) {
      validasinomor.innerText = "*Nomor Whatsapp kurang dari 12 digit";
      validasinomor.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else if (nomorWhatsApp.length > 15) {
      validasinomor.innerText = "*Nomor Whatsapp lebih dari 15 digit";
      validasinomor.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else if (isNaN(nomorWhatsApp.value)) {
      validasinomor.innerText = "*Nomor Whatsapp harus angka";
      validasinomor.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else {
      validasinomor.innerText = "";
      validasinomor.classList.remove("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    }
  
    let firstname = document.getElementById("namadepan").value;
    let lastname = document.getElementById("namabelakang").value;
    let validasidepan = document.getElementById("validasidepan");
    let validasibelakang = document.getElementById("validasibelakang");
  
    if (firstname === "" && lastname === "") {
      validasidepan.innerText = "*Nama depan tidak boleh kosong";
      validasidepan.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
      validasibelakang.innerText = "*Nama belakang tidak boleh kosong";
      validasibelakang.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else if (firstname === "") {
      validasidepan.innerText = "*Nama depan tidak boleh kosong";
      validasidepan.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
      validasibelakang.innerText = "";
      validasibelakang.classList.remove("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else if (lastname === "") {
      validasibelakang.innerText = "*Nama belakang tidak boleh kosong";
      validasibelakang.classList.add("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
      validasidepan.innerText = "";
      validasidepan.classList.remove("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    } else {
      validasidepan.innerText = "";
      validasidepan.classList.remove("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
      validasibelakang.innerText = "";
      validasibelakang.classList.remove("form-control", "form-control-md", "border-0", "inputform", "text-danger", "fw-bold");
    }
    
  
    if (
      validasinomor.innerText === "" &&
      validasidepan.innerText === "" &&
      validasibelakang.innerText === "")
      {
        buatLink();
    }
  }

