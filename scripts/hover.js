const navbar=document.querySelector('.navbar');
const parfum=document.querySelector('.Parfum');





navbar.childNodes.forEach((child)=>{
    child.addEventListener('mouseenter',()=>{
        if(child.classList.contains('parfume')){
            parfum.style.display='flex';
        }
    });

});

parfum.addEventListener('mouseleave',()=>{

    parfum.style.display='none';
});


