
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

function doSearch(text) {
   if (window.find(text)) {
       console.log(window.find(text));
   }
}


function search() {
 
    var name = document.getElementById("searchForm").elements["searchItem"].value;
    var pattern = name.toLowerCase();
    var targetId = "";
  
    var divs = document.getElementsByClassName("col-md-2");
    for (var i = 0; i < divs.length; i++) {
       var para = divs[i].getElementsByTagName("p");
       var index = para[0].innerText.toLowerCase().indexOf(pattern);
       if (index != -1) {
          targetId = divs[i].parentNode.id;
          document.getElementById(targetId).scrollIntoView();
          break;
       }
    }  
 }

function handleRightArrowClick(){
   let thumbnails = document.querySelectorAll("#slider .thumbnail");
   let currentIndex = getSelectedThumbnailIndex();
   let nextThumbnailIndex = currentIndex + 1;

   if(nextThumbnailIndex >= thumbnails.length) {
       nextThumbnailIndex = 0;
   }
   
   selectThumbnail(thumbnails[nextThumbnailIndex]);
}

function handleLeftArrowClick(){
   let thumbnails = document.querySelectorAll("#slider .thumbnail");
   let currentIndex = getSelectedThumbnailIndex();
   let nextThumbnailIndex = currentIndex - 1;

   if(nextThumbnailIndex < 0) {
       nextThumbnailIndex = thumbnails.length - 1;
   }
   
   selectThumbnail(thumbnails[nextThumbnailIndex]);
}

function getSelectedThumbnailIndex(){
   let thumbnails = document.querySelectorAll("#slider .thumbnail");
   let selectedThumbnail = document.querySelector("#slider .thumbnail.selected");

   for(let i = 0; i < thumbnails.length; i++) {
       if(selectedThumbnail == thumbnails[i]) {
           return i;
       }
   }

   return -1;
}