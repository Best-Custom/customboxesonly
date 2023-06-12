
<footer class="footer__section container-fluid">
<div class="row">
    <div class="col-12">    
        <div class="footer__section__area row text-center ">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 footer__place">
                    <div class="footer__area__image">
                        <img src="asset/images/logo_text_blue.png" alt="" class="img-fluid" srcset="">
                    </div>
                    <p class="mt-3 footer__logo__text">
                    Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.
                    </p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 footer__place">
               <div class="footer__area">Company </div>
                    <div class="mt-4 text-left">
                        <ul class="footer__list__style p-0">
                            <li><a class="footer__items__area__links" href="#">About Company</a></li>
                            <li><a class="footer__items__area__links" href="#">Company Services</a></li>
                            <li><a class="footer__items__area__links" href="#">Job opportunities</a></li>
                            <li><a class="footer__items__area__links" href="#">Creative people</a></li>
                            <li><a class="footer__items__area__links" href="#">Contact us</a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 footer__place">
               <div class="footer__area">Customers </div>
                    <div class="mt-4">
                        <ul class="footer__list__style p-0">
                            <li><a class="footer__items__area__links" href="#">Client Support</a></li>
                            <li><a class="footer__items__area__links" href="#">Latest news</a></li>
                            <li><a class="footer__items__area__links" href="#">Company story</a></li>
                            <li><a class="footer__items__area__links" href="#">Pricing packages</a></li>
                            <li><a class="footer__items__area__links" href="#">Who we are</a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 footer__place">
                <div class="footer__area">Payment Methods</div>
                <div class="footer__items__area__payment__method mt-4">
                <img src="asset/images/Mastercard.png" style="width:40px; height:28px ; margin-right:7px;" alt="" srcset="">
                <img src="asset/images/Visa.png" style="width:40px; height:28px; margin-right:7px;" alt="" srcset="">
                <img src="asset/images/Amex.png" style="width:40px; height:28px ; margin-right:7px;" alt="" srcset="">
                <img src="asset/images/Discover.png" style="width:40px; height:28px" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>


</footer>

<link rel="stylesheet" href="node_modules/bootstrap/js/dist/css/bootstrap.min.css">
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="jquery.min.js"></script>

<!-- package bootstrap Jquery link -->
<script src="asset/js/jquery-3.7.0.js"></script>


<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
   </script>

   <script>
        $(document).ready(function() {

            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:7, 
            // items change number for slider display on desktop
            
                loop:true,
                margin:45,
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true

            });


        })

   </script>


<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

</script>


</body>
</html>