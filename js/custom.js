jQuery(function($) {

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


    $('.owl-carousel-city').owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    touchDrag  : true,
     mouseDrag  : true,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:true,
        },
        600:{
            items:3,
            nav:true,
        },
        1000:{
            items:7,
            nav:true,
        },
        1600:{
            items:8,
            nav:true,
        }
    }})


     $('.owl-carousel-states').owlCarousel({
    loop:true,
    autoplay:false,
    touchDrag  : true,
     mouseDrag  : true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:true,
        },
        600:{
            items:3,
            nav:true,
        },
        1000:{
            items:5,
            nav:true,
        },
        1600:{
            items:6,
            nav:true,
        }
   }})

     $('.owl-carousel-stat').owlCarousel({
    loop:true,
    autoplay:false,
    touchDrag  : true,
     mouseDrag  : true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:true,
        },
        600:{
            items:3,
            nav:true,
        },
        1000:{
            items:5,
            nav:true,
        },
        1600:{
            items:6,
            nav:true,
        }
   }})

     $('.owl-carousel-subplace').owlCarousel({
    loop:true,
    autoplay:false,
    touchDrag  : true,
     mouseDrag  : true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:true,
        },
        600:{
            items:2,
            nav:true,
        },
        900:{
            items:4,
            nav:true,
        },
        1000:{
            items:5,
            nav:true,
        },
        1300:{
            items:6,
            nav:true,
        },
        1600:{
            items:7,
            nav:true,
        },
        1920:{
            items:9,
            nav:true,
        }
   }})
    
	
// 	$('.owl-carousel-stat').owlCarousel({
// 		loop:true,
// 		lazyLoad:true,
// 		margin:20,
// // 		autoWidth:true,
// // 		autoHeight:true,
// 		autoplay:true,
// 		autoplayTimeout:3000,
// 		touchDrag  : true,
// 		mouseDrag  : true,
// 		dots: false,
// 		nav:true,
// 		responsiveClass:true,
// 		responsive:{
// 			1366:{
// 				items:3,
// // 				nav:true
// 			},
// 			1024:{
// 				items:3,
// // 				nav:true
// 			},
// 			640:{
// 				items:2,
// // 				nav:true
// 			},
// 			0:{
// 				items:1,
// // 				nav:true
// 			}
// 		}
// 	})


});