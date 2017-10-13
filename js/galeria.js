function abrirModal(id){
    var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(id);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    var navBar =document.getElementById("mainNav")
    navBar.style.display = "none";
    modal.style.display = "block";
    modalImg.src = img.src;
//    captionText.innerHTML = this.alt;
    
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
  navBar.style.display = "block";
}
    

}