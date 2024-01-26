let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.heaader .navbar');

menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

let loadMoreBtn=document.querySelector('.packages.load-more .btn');
let currentItem=3;
loadMoreBtn.onclick=()=>{
    let boxes=[...document.querySelectorAll('.packages .box-container .box')];
    for(vari=currentItem;i<currentItem+3;i++){
        boxes[i].style.display='inline-block';

    };
    currentItem+=3;
    if(currentItem>=boxes.length){
        loadMoreBtn.style.display='none';
    }
}

