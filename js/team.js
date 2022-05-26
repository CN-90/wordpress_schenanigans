// this code is for the modal that appears on the team page.
const modal = document.querySelector("#bio_modal");
const modalImage = document.querySelector("#modal_image");
const modalName = document.querySelector("#modal_name");
const modalPosition = document.querySelector("#modal_position");
const modalSummary = document.querySelector("#modal_summary");


function toggleModal(bio) {
    modal.classList.toggle('active');
    modalName.innerText = bio.name;
    modalImage.src = bio.image_url;
    modalPosition.innerText = bio.position;
    modalSummary.innerHTML = bio.summary;
  
}

function closeModal() {

}



class BioModal {
    constructor() {
        
    }
}